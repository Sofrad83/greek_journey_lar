<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanEntrainement extends Model
{
    protected $table = 'plan_entrainement';
    public $timestamps = false;
    protected $guarded = ['id'];

}
