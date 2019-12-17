<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operator extends Model
{
  use SoftDeletes;
    protected $fillable = [
    	'operator_name',
    ];
}
