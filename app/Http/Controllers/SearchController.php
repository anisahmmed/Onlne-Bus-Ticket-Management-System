<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepartureInfo;
use App\Destination;
use App\Date;
use App\Bus;

class SearchController extends Controller
{

    function index()
    {
      $all_departure = DepartureInfo::all();
      $all_destination = Destination::all();
      $all_date = Date::all();
    	return view('customer.index',compact('all_departure','all_destination','all_date'));
    }

    // search
    function search_result(Request $request){
    	$a =$request->departure;
    	$n =$request->destination;
    	$i =$request->journey_date;
    	$buses = Bus::where('departure_id','LIKE','%'.$a.'%')
    	->where('destination_id','LIKE','%'.$n.'%')
    	->where('date_id','LIKE','%'.$i.'%')
    	->get();

    	if(count($buses)>0){
    		return view('customer.search_result')->withDetails($buses)->withQuery($a,$n,$i);
    	}
    	else{
    		return view('customer.not_found');
    	}
    }
}
