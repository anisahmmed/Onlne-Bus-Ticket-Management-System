<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartureInfo extends Model
{
    protected $fillable = [
    	'departure','departure_time',
    ];
}
