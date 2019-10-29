<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Businfo;
use Carbon\Carbon;

class BusinfoController extends Controller
{
	function index(){
		return view('admin.bus_info_form');
	}
    function insert(Request $request){
    	Businfo::insert([
    		'operator' => $request->operator,
			'ac_nac' => $request->ac_nac,
			'departure' => $request->departure,
			'duration' => $request->duration,
			'distance' => $request->distance,
			'arrival' => $request->arrival,
			'total_seat' => $request->total_seat,
			'price' => $request->price,
			'created_at' => Carbon::now(),
    	]);
    	return back();
   
    	
    }
}
