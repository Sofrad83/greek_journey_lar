<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'serie';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function seance()
    {
        return $this->hasOne('App\Models\Seance', 'id', 'seance_id');
    }

    public function exercice()
    {
        return $this->hasOne('App\Models\Exercice', 'exercice_id', 'id');
    }
}
