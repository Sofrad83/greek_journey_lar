<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Amis;
use App\Models\Seance;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getMesAmis()
    {
        $amis_demande = Amis::where('user_1', $this->id)->where('is_pending', 0)->get()->pluck('user_2')->toArray();
        $amis_accepte = Amis::where('user_2', $this->id)->where('is_pending', 0)->get()->pluck('user_1')->toArray();
        $amis_id = array_merge($amis_demande, $amis_accepte);
        $mes_amis = User::whereIn('id', $amis_id)->get();

        return $mes_amis;
    }

    public function getDemandeEnAttente()
    {
        return Amis::where('user_2', $this->id)->where('is_pending', 1)->count();
    }

    public function getVolumeSemaine()
    {
        //On commence par récup toutes les séances de la semaines
        $seances = Seance::whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('user_id', $this->id)->get();
        $volume_semaine = Serie::selectRaw('sum((nb_rep * poids)) as volume')->whereIn('seance_id', $seances->pluck('id')->toArray())->first()->volume;

        return [
            'volume_semaine' => $volume_semaine,
            'nb_seance' => $seances->count()
        ];
    }
}
