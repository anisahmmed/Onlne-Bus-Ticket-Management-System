<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketBooking extends Model
{
    protected $fillable = [
    	'customer_name',
		'phone',
		'bus_name',
		'bus_chassis',
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
