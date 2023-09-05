<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    protected $table = 'citation';
    public $timestamps = false;
    protected $guarded = ['id'];
}
