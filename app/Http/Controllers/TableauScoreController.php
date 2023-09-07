<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exercice;
use App\Models\Muscle;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TableauScoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $mes_amis = $user->getMesAmis();

        $mes_amis->push($user);
        foreach($mes_amis as $ami){
            $vol = $ami->getVolumeSemaine();
            $ami->volume_semaine = $vol['volume_semaine'] ?? 0.00;
            $ami->nb_seance = $vol['nb_seance'];
        }
        $mes_amis_tab = $mes_amis->pluck('volume_semaine', 'id')->toArray();
        arsort($mes_amis_tab);

        $semaine_en_cours = Carbon::now()->startOfWeek()->format('d/m/Y'). " au ".Carbon::now()->endOfWeek()->format('d/m/Y');

        return view('tableau-score.index', [
            'mes_amis_tab' => $mes_amis_tab,
            'mes_amis' => $mes_amis,
            'semaine_en_cours' => $semaine_en_cours
        ]);
    }
}
