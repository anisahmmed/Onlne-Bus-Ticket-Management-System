<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'destination','destination_scenario',
    ];
}
