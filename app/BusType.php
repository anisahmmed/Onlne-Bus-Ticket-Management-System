<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusType extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'bus_type','ticket_price',
    ];
}
