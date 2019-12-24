<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class TicketBooking extends Model
{
  use SoftDeletes;

    protected $fillable = [
    	'customer_name',
  		'phone',
  		'bus_name',
      'bus_type',
  		'bus_chassis',
      'bus_route',
      'departure',
  		'destination',
  		'journey_date',
  		'departure_time',
  		'seat_no',
  		'total_seat',
  		'terminal',
  		'ticket_price',
  		'total_price',
  		'payment_status',
  		'ticket_token',
    ];


}
