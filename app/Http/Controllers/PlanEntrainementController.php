<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Routine;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Exercice;
use App\Models\PlanEntrainement;


class PlanEntrainementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $mes_routines = Routine::where('user_id', $user->id)->get();
        $plan_entrainement = PlanEntrainement::where('user_id', $user->id)->get();

        return view('plan-entrainement.index', [
            'user' => $user,
            'mes_routines' => $mes_routines,
            'plan_entrainement' => $plan_entrainement
        ]);
    }

    public function assignRoutine(Request $request)
    {
        $user = Auth::user();
        $routine_id = $request->get('routine_id');
        $jour_id = $request->get('jour_id');

        if($routine_id){
            PlanEntrainement::updateOrCreate([
                'jour_id' => $jour_id,
                'user_id' => $user->id
            ], [
                'jour_id' => $jour_id,
                'user_id' => $user->id,
                'routine_id' => $routine_id,
            ]);
        }else{
            PlanEntrainement::where('jour_id', $jour_id)->where('user_id', $user->id)->delete();
        }

        return [
            'message' => "Mis à jour"
        ];
        
    }
}
