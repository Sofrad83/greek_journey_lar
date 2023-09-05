<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoutineSaved extends Model
{
    protected $table = 'routine_saved';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function routine()
    {
        return $this->hasOne('App\Models\Routine', 'id', 'routine_id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
