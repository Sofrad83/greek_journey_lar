<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Routine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Exercice;
use Illuminate\Support\Facades\Storage;

class MonCompteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        return view('mon-compte.index', [
            'user' => $user
        ]);
    }

    public function deletePdp(Request $request)
    {
        $user = Auth::user();
        $user->img_url = null;
        $user->save();

        return [
            'message' => "Photo de profil supprimé."
        ];
    }

    public function changePdp(Request $request)
    {
        $url = $request->get('url');
        $user = Auth::user();
        $user->img_url = $url;
        $user->save();

        return 1;
    }

    public function changeInfos(Request $request)
    {
        $nom = $request->get('nom');
        $user = Auth::user();
        $user->name = $nom;
        $user->save();

        return [
            'message' => "Mis  à jour"
        ];
    }

    public function changePdpCustom(Request $request)
    {
        $pdp = $request->file('pdp');
        $user = Auth::user();

        if (!is_null($pdp)) {
            $name = time() . '.' . $pdp->getClientOriginalExtension();
            $chemin = "/public/img/pdp/{$user->id}";

            // Vérifiez si le répertoire de destination existe, sinon, créez-le
            if (!is_dir($chemin)) {
                mkdir($chemin, 0777, true);
            }

            
            $cheminComplet = $chemin."/{$name}";
            $pdp->move($chemin, $name);

            $user->img_url = "img/pdp/{$user->id}/{$name}";
            $user->save();

            return 1;
        } else {
            return [
                'error' => 1,
                'message' => "Impossible d'utiliser le fichier uploadé."
            ];
        }
    }
}
