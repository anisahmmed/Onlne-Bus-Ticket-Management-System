<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusRoute extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'bus_route',
    ];
}
