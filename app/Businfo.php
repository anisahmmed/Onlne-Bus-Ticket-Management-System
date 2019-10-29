<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Businfo extends Model
{
    protected $fillable = [
		'operator',
		'ac_nac',
		'departure',
		'duration',
		'distance',
		'arrival',
		'total_seat',
		'price',
    ];
}
