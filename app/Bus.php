<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;


class Bus extends Model
{
    use SoftDeletes;

    use Searchable;
    
    protected $fillable=[
    	'date_id','operator_name_id','chassis_no_id','bus_type_id','bus_route_id','departure','departure_time_id','destination_id','total_seat_id','ticket_price_id','terminal_id',
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
    	return $this->hasOne('App\BusRoute','id','bus_route_id');
    }

    // Relation with time
    function relationbetweenDepartureInfo(){
    	return $this->hasOne('App\DepartureInfo','id','departure_id','departure_time_id');
    }

    //Relation with Destination
    function relationbetweenDestination(){
        return $this->hasOne('App\Destination','id','destination_id');
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

    // Relation with BoardingPoint
    function relationbetweenBoardinPoint(){
        return $this->hasOne('App\BoardingPoint','id','terminal_id');
    }
}
