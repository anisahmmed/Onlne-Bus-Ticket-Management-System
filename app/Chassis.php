<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chassis extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'chassis_no',
    ];
}
