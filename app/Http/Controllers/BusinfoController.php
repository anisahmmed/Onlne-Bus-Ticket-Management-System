<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;
use App\Businfo;
use App\Bus;
use App\BusType;
use App\Chassis;
use App\BusRoute;
use App\DepartureTime;
use App\Operator;
use App\TotalSeat;
use App\TicketPrice;
use Carbon\Carbon;
use Alert;

class BusinfoController extends Controller
{
	// function index(){
	// 	return view('admin.bus_info_form');
	// }
 //    function insert(Request $request){
 //    	Businfo::insert([
 //    		'operator' => $request->operator,
	// 		'ac_nac' => $request->ac_nac,
	// 		'departure' => $request->departure,
	// 		'duration' => $request->duration,
	// 		'distance' => $request->distance,
	// 		'arrival' => $request->arrival,
	// 		'total_seat' => $request->total_seat,
	// 		'price' => $request->price,
	// 		'created_at' => Carbon::now(),
 //    	]);
 //    	return back();
   
    	
 //    }

	
	function buses(){
		$all_dates = Date::all();
		$all_chassises = Chassis::all();
		$all_buses = Bus::paginate(4);
		$all_routes = BusRoute::paginate(4);
		$all_times = DepartureTime::paginate(4);
		$all_bus_types = BusType::paginate(4);
		$all_operators = Operator::paginate(4);
		$all_seats = TotalSeat::paginate(4);
		$all_ticket_prices = TicketPrice::paginate(4);
		return view('admin.buses',compact('all_dates','all_chassises','all_buses','all_routes','all_times','all_bus_types','all_operators','all_seats','all_ticket_prices'));
	}
	
	// Add Buses
	function bus_insert(Request $request){
		// $request->validate([
		// 	'sessis_no' => 'required|numeric|min:4',
		// 	'departure' => 'required|string',
		// 	'departure_time' => 'required|string',
		// 	'arrival' => 'required|string',
		// ],[
		// 	'session.required' => 'Bus Sessis Number Is Required.',
		// 	'departure.required' => 'Bus Departure Is Required.',
		// 	'departure_time.required' => 'Bus Departure Time Is Required.',
		// 	'arrival.required' => 'Bus Arrival Is Required.',
		// ]);

		Bus::insert($request->except('_token'));
		Alert::toast('Record Inserted Successfully','success');
		return back();
	}

	//  Bus Type form
	function bus_type(){
		return view('admin.bus_type');
	}
	// Insert bus Type
	function bus_type_insert(Request $request){

		BusType::insert([
			'bus_type' => $request->bus_type,
			'ticket_price' => $request->ticket_price,
		]);
		return back();
		// $bus_types = BusType::insert($request->except('_token'));
		
	}


	// Bus Information View
	function bus_view(){
		$all_buses = Bus::paginate(6);
		return view('admin.bus.bus_info',compact('all_buses'));
	}

	// Edit Bus Info
	function edit_bus_info($id){
		$single_bus_info = Bus::find($id);
		return view('admin.bus.edit_bus_info',compact('single_bus_info'));
	}

	// Update bus Information
	function update_bus_info(Request $request){
		Bus::find($request->id)->update([
			'operator_name_id' => $request->operator_name_id,
			'chassis_no_id' => $request->chassis_no_id,
			'bus_type_id' => $request->bus_type_id,
			'deparuture_destination_id' => $request->deparuture_destination_id,
			'departure_time_id' => $request->departure_time_id,
			'total_seat_id' => $request->total_seat_id,
			'ticket_price_id' => $request->ticket_price_id,
		]);
		return redirect(route('view_bus'));
	}

}
