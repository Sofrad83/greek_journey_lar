<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Routine;
use Illuminate\Support\Facades\DB;
use App\Models\Exercice;
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

        $routines_amis = Routine::where('user_id', '!=', $user->id)->get();

        return view('routine.index', [
            'mes_routines' => $mes_routines,
            'routines_amis' => $routines_amis,
            'user' => $user
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
}
