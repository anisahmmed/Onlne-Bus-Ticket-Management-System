<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketPrice extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'ticket_price',
    ];
}
