<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusType extends Model
{
    protected $fillable = [
    	'bus_type','ticket_price',
    ];
}
