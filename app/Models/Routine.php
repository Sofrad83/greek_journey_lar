<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exercice;

class Routine extends Model
{
    protected $table = 'routine';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $appends = ['is_saved'];

    public function exercices()
    {
        return $this->belongsToMany(Exercice::class, 'routine_has_exercice', 'routine_id', 'exercice_id')->withPivot('ordre');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function getIsSavedAttribute()
    {
        if(RoutineSaved::where('routine_id', $this->id)->count()){
            return true;
        }else{
            return false;
        }
    }
}
