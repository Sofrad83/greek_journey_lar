<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    protected $table = 'groupe_musculaire';
    public $timestamps = false;
    protected $guarded = ['id'];
}
