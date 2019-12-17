<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterTerminal extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'boarding_point_id','bus_id',
    ];


    // Relation with BoardingPoint
    function relationbetweenBoardingPoint(){
    	return $this->hasOne('App\BoardingPoint','id','boarding_point_id');
    }

    // Relation with Operator
    function relationbetweenBus(){
    	// return $this->hasOne('App\Operator','id','operator_id');
        return $this->hasOne('App\Bus','id','bus_id');
    }
}
