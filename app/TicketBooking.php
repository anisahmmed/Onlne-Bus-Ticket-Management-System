<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketBooking extends Model
{
    protected $fillable = [
    	'customer_name_id','phone_id','bus_name_id','destination_id','journey_date_id','departure_time_id','seat_no','terminal_id','total_price','total_seat','ticket_token','ticket_price','payment_status',
    ];




    //End
}
