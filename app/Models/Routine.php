<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exercice;

class Routine extends Model
{
    protected $table = 'routine';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function exercices()
    {
        return $this->belongsToMany(Exercice::class, 'routine_has_exercice', 'routine_id', 'exercice_id')->withPivot('ordre');
    }
}
