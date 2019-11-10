<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable=[
    	'date_id','operator_name_id','chassis_no_id','bus_type_id','departure_destination_id','departure_time_id','total_seat_id','ticket_price_id',
    ];

    // Relation with date
    function relationbetweendate(){
        return $this->hasOne('App\Date','id','date_id');
    }

    // Relation with chassis
    function relationbetweenchassis(){
    	return $this->hasOne('App\Chassis','id','chassis_no_id');
    }

    // Relation with routes
    function relationbetweenbusroutes(){
    	return $this->hasOne('App\BusRoute','id','departure_destination_id');
    }

    // Relation with time
    function relationbetweentime(){
    	return $this->hasOne('App\DepartureTime','id','departure_time_id');
    }

    // Relation with BusType
    function relationbetweenBusType(){
    	return $this->hasOne('App\BusType','id','bus_type_id');
    }

    // Relation with Operator
    function ralationbetweenOperator(){
    	return $this->hasOne('App\Operator','id','operator_name_id');
    }

    // Relation with TotalSeat
    function relationbetweenTotalSeat(){
    	return $this->hasOne('App\TotalSeat','id','total_seat_id');
    }

    // Relation with TicketPrice
    function relationbetweenTicketPrice(){
    	return $this->hasOne('App\TicketPrice','id','ticket_price_id');
    }
}
