<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exercice;
use App\Models\Muscle;
use Illuminate\Support\Facades\Auth;

class ExerciceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $exercices = Exercice::where('user_id', $user->id)->get();
        $muscles = Muscle::all();

        return view('exercice.index', [
            'exercices' => $exercices,
            'muscles' => $muscles,
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $exercice = Exercice::updateOrCreate(['id' => $request->get('id')], $request->all());

        return [
            'message' => $request->get('id') ? "L'exercice a été modifié." : "L'exercice a été ajouté."
        ];
    }

    public function deleteExercice(Request $request)
    {
        Exercice::find($request->get('id'))->delete();

        return [
            'message' => "L'exercice a été supprimé."
        ];
    }

    public function getExercice(Request $request)
    {
        return Exercice::find($request->get('id'));
    }
}
