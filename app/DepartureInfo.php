<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepartureInfo extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'departure','departure_time',
    ];
}
