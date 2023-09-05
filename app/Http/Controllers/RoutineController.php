<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Routine;
use Illuminate\Support\Facades\DB;
use App\Models\Exercice;
use App\Models\RoutineSaved;
use App\Models\PlanEntrainement;
use Illuminate\Support\Facades\Auth;

class RoutineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $mes_routines = Routine::where('user_id', $user->id)->get();

        $routines_amis = Routine::with('user')->where('user_id', '!=', $user->id)->where('private', 0)->get();
        $routine_saved = RoutineSaved::where('user_id', $user->id)->get()->pluck('routine_id')->toArray();

        return view('routine.index', [
            'mes_routines' => $mes_routines,
            'routines_amis' => $routines_amis,
            'user' => $user,
            'routine_saved' => $routine_saved
        ]);
    }

    public function store(Request $request)
    {
        $nom = $request->get('nom');
        $description = $request->get('description');
        $user = Auth::user();

        $routine = Routine::updateOrCreate(['id' => $request->get('id')], [
            'nom' => $nom,
            'description' => $description,
            'user_id' => $user->id
        ]);

        $exos = $request->get('exos');
        $routine->exercices()->detach();
        foreach($exos as $index => $ex){
            $routine->exercices()->attach($ex, ['ordre' => $index+1]);
        }
        return [
            'message' => $request->get('id') ? "La routine a été modifiée." : "La routine a été ajoutée."
        ];
    }

    public function deleteRoutine(Request $request)
    {
        $routine = Routine::find($request->get('id'));
        $routine->exercices()->detach();
        $routine->delete();

        return [
            'message' => "La routine a été supprimée."
        ];
    }

    public function getRoutine(Request $request)
    {
        return Routine::find($request->get('id'));
    }

    public function getFormRoutine(Request $request)
    {
        $user = Auth::user();
        $routine = Routine::find($request->get('id'));
        $mes_exercices = Exercice::with('muscle')->where('user_id', $user->id)->get();

        $view = view('routine.partials.ajax.form-ajouter', [
            'routine' => $routine,
            'mes_exercices' => $mes_exercices,
            'user' => $user
        ])->render();

        return [
            'view' => $view
        ];
    }

    public function saveRoutine(Request $request)
    {
        $id = $request->get('id');
        $user = Auth::user();

        $saved = RoutineSaved::where('routine_id', $id)->where('user_id', $user->id)->first();
        if($saved){
            PlanEntrainement::where('routine_id', $id)->where('user_id', $user->id)->delete();
            $saved->delete();
            return [
                'message' => "La routine n'est plus enregistrée. Vous ne pouvez plus l'utiliser dans vos séances et elle a été retiré du plan d'entrainement."
            ];
        }else{
            RoutineSaved::create([
                'routine_id' => $id,
                'user_id' => $user->id
            ]);

            return [
                'message' => "Routine enregistrée. Vous pouvez désormais l'utiliser dans vos séances ou dans le plan d'entrainement."
            ];
        }
    }
}
