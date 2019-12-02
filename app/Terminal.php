<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $fillable = [
    	'terminal_name_id','operator_name_id',
    ];
}
