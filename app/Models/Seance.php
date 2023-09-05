<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $table = 'seance';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'user_id', 'id');
    }
}
