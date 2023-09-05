<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amis extends Model
{
    protected $table = 'amis';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function demandeur()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_1');
    }

    public function receveur()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_2');
    }
}
