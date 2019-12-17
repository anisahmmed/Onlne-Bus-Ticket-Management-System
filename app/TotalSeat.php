<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TotalSeat extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'total_seat',
    ];
}
