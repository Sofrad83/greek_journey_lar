<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Routine;
use App\Models\Seance;
use App\Models\Serie;
use App\Models\ComparatifVolume;
use App\Models\PlanEntrainement;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SeanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $mes_routines = Routine::where('user_id', $user->id)->get();
        $routine_du_jour = PlanEntrainement::where('user_id', $user->id)->where('jour_id', Carbon::now()->dayOfWeekIso)->first()->routine_id ?? 0;

        return view('seance.index', [
            'mes_routines' => $mes_routines,
            'routine_du_jour' => $routine_du_jour
        ]);
    }

    public function recap(float $volume)
    {
        $comparatif_volume = ComparatifVolume::where('bas', '<=', $volume)->where('haut', '>=', $volume)->first();

        $volume_format = number_format($volume, 2, ',', ' ');

        if (strpos($volume_format, ',') !== false) {
            $volume_format = rtrim($volume_format, '0');
        }
        $volume_format = rtrim($volume_format, ',');


        return view('seance.recap', [
            'comparatif_volume' => $comparatif_volume,
            'volume' => $volume_format
        ]);

        return $volume;
    }

    public function startSeance(Request $request)
    {
        $routine_id = $request->get('routine_id');
        $routine = Routine::with('exercices.series')->find($routine_id);

        return view('seance.seance', [
            'routine' => $routine
        ]);
    }

    public function storeSeance(Request $request)
    {
        $exercices = $request->get('exercices');

        //On commence par créer la séance
        $seance = new Seance();
        $seance->user_id = Auth::user()->id;
        $seance->date = Carbon::now();
        $seance->save();

        $volume = 0;

        foreach($exercices as $exercice_id => $series){
            foreach ($series as $serie_number => $data) {
                $serie = new Serie();
                $serie->seance_id = $seance->id;
                $serie->exercice_id = $exercice_id;
                $serie->serie_number = $serie_number;
                $serie->nb_rep = (int) $data['rep'];
                $serie->poids = (float) str_replace(',', '.', $data['poids']);
                $serie->save();

                $volume += (float) str_replace(',', '.', $data['poids']) * (float) $data['rep'];
            }
        }

        return [
            'recap_url' => route('seance.recap', ['volume' => $volume])
        ];
    }
}
