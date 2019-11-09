<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chassis;
use App\BusRoute;
use App\Operator;
use App\DepartureTime;
use App\BusType;
use App\TotalSeat;
use App\TicketPrice;

class InputController extends Controller
{
    // input
	function input(){
		$all_chassis_no = Chassis::paginate(4);
		$all_routes = BusRoute::paginate(4);
		$all_operators = Operator::paginate(4);
		$all_departure_times = DepartureTime::paginate(4);
		$all_bus_types = BusType::paginate(4);
		$total_seats = TotalSeat::paginate(4);
		$ticket_prices = TicketPrice::paginate(4);
	    return view('admin.input',compact('all_chassis_no','all_routes','all_operators','all_departure_times','all_bus_types','total_seats','ticket_prices'));
	}

	function input_chassis(Request $request){
	    Chassis::insert($request->except('_token'));
	    return back();
	}

	// Route Insert
	function input_route(Request $request){
		BusRoute::insert($request->except('_token'));
		return back();
	}

	// Operator Insert
	function input_operator(Request $request){
		Operator::insert($request->except('_token'));
		return back();
	}
	// Departure Time insert
	function input_time(Request $request){
		DepartureTime::insert($request->except('_token'));
		return back();
	}

	// Bus Type Insert
	function input_bus_type(Request $request){
		BusType::insert($request->except('_token'));
		return back();
	}

	// Total seat insert
	function input_total_seat(Request $request){
		TotalSeat::insert($request->except('_token'));
		return back();
	}

	// Ticket Price Insert
	function input_ticket_price(Request $request){
		TicketPrice::insert($request->except('_token'));
		return back();
	}

	// Chassis Edit
	function edit_chassis($id){
		$single_chassis = Chassis::find($id);
		return view('admin.input.chassis_edit',compact('single_chassis'));
	}

	// Chassis Info update
	function update_chassis(Request $request){
		Chassis::find($request->id)->update([
			'chassis_no' =>$request->chassis_no,
		]);
		return redirect(url('/admin/input'));
	}

	// Edit Bus Route
	function edit_busroute($id){
		$single_bus_route = BusRoute::find($id);
		return view('admin.input.busroute_edit',compact('single_bus_route'));
	}

	// Update bus route
	function update_busroute(Request $request){
		BusRoute::find($request->id)->update([
			'bus_route' =>$request->bus_route,
		]);
		return redirect(url('/admin/input'));
	}

	// Operator Edit
	function edit_operator($id){
		$single_operator = Operator::find($id);
		return view('admin.input.bus_operator_edit',compact('single_operator'));
	}

	// Operator Update
	function update_operator(Request $request){
		Operator::find($request->id)->update([
			'operator_name' =>$request->operator_name,
		]);
		return redirect(url('/admin/input'));
	}

	// Departure Time edit
	function edit_departure_time($id){
		$single_departure_time = DepartureTime::find($id);
		return view('admin.input.departure_time_edit',compact('single_departure_time'));
	}

	// update departure time
	function update_departure_time(Request $request){
		DepartureTime::find($request->id)->update([
			'departure_time' =>$request->departure_time,
		]);
		return redirect(url('/admin/input'));
	}
}
