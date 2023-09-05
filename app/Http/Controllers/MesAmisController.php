<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exercice;
use App\Models\Muscle;
use App\Models\Amis;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MesAmisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $demandes = Amis::with('demandeur')->where('user_2', $user->id)->where('is_pending', 1)->get();
        $mes_amis = $user->getMesAmis();

        return view('mes-amis.index', [
            'user' => $user,
            'demandes' => $demandes,
            'mes_amis' => $mes_amis
        ]);
    }

    public function demandeAmi(Request $request)
    {
        $user = Auth::user();
        $code_ami = $request->get('code_ami');

        if($code_ami == $user->code_ami){
            return [
                'error' => 1,
                'message' => "Renseignez un code ami différent du vôtre."
            ];
        }

        $user_2 = User::where('code_ami', $code_ami)->first();
        if($user_2){
            //On check si il a déjà fait la demande ou si il est déjà ami
            $amis = Amis::where('user_1', $user->id)->where('user_2', $user_2->id)->first();
            if($amis){
                if($amis->is_pending){
                    return [
                        'error' => 1,
                        'message' => "Vous avez déjà envoyé une demande à cet utilisateur. Attendez qu'il l'accepte."
                    ];
                }else{
                    return [
                        'error' => 1,
                        'message' => "Vous êtes déjà ami avec cet utilisateur."
                    ];
                }
            }
            $amis = Amis::where('user_2', $user->id)->where('user_1', $user_2->id)->first();
            if($amis){
                if($amis->is_pending){
                    return [
                        'error' => 1,
                        'message' => "Cet utilisateur vous a déjà demander en ami. Vous pouvez accepter sa demande."
                    ];
                }else{
                    return [
                        'error' => 1,
                        'message' => "Vous êtes déjà ami avec cet utilisateur."
                    ];
                }
            }
            $amis = Amis::create([
                'user_1' => $user->id,
                'user_2' => $user_2->id,
                'is_pending' => 1
            ]);
            return [
                'error' => 0,
                'message' => "Demande d'ami envoyé."
            ];
        }else{
            return [
                'error' => 1,
                'message' => "Il n'y a aucun utilisateur avec ce code ami."
            ];
        }
    }

    public function acceptDemande(Request $request)
    {
        $demande_id = $request->get('demande_id');
        $demande = Amis::find($demande_id);
        $demande->is_pending = 0;
        $demande->save();

        return[
            'message' => "Demande acceptée."
        ];
    }

    public function retirerAmi(Request $request)
    {
        $user = Auth::user();
        $id = $request->get('id');
        Amis::where('user_1', $id)->where('user_2', $user->id)->delete();
        Amis::where('user_2', $id)->where('user_1', $user->id)->delete();

        return [
            'message' => "Ami supprimé."
        ];
    }
}
