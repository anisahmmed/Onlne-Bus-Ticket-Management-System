<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardingPoint extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'terminal_name',
    ];

}
