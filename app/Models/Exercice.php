<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exercice;
use Illuminate\Support\Facades\Auth;

class Exercice extends Model
{
    protected $table = 'exercice';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function routines()
    {
        return $this->belongsToMany(Routine::class, 'routine_has_exercice', 'exercice_id', 'routine_id')->withPivot('ordre');
    }

    public function series()
    {
        return $this->hasMany('App\Models\Serie', 'exercice_id', 'id');
    }

    public function muscle()
    {
        return $this->hasOne('App\Models\Muscle', 'id', 'groupe_musculaire_id');
    }

    public function getLastSeries()
    {
        return $this->series->where('seance_id', $this->series->max('seance_id'))->where('seance.user_id', Auth::user()->id);
    }
}
