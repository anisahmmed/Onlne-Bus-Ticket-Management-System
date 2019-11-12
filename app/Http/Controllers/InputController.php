<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chassis;
use App\BusRoute;
use App\Operator;
use App\Date;
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
		$all_dates = Date::paginate(4);
		$all_departure_times = DepartureTime::paginate(4);
		$all_bus_types = BusType::paginate(4);
		$total_seats = TotalSeat::paginate(4);
		$ticket_prices = TicketPrice::paginate(4);
	    return view('admin.input',compact('all_chassis_no','all_routes','all_operators','all_dates','all_departure_times','all_bus_types','total_seats','ticket_prices'));
	}

	function input_chassis(Request $request){
		$request->validate([
			'chassis_no' => 'required|string|min:4',
		]);
	    Chassis::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
	    return back();
	}

	// Chassis Edit
	function edit_chassis($id){
		$single_chassis = Chassis::find($id);
		return view('admin.input.chassis_edit',compact('single_chassis'));
	}

	// Chassis Info update
	function update_chassis(Request $request){
		$request->validate([
			'chassis_no' => 'required|string|min:4',
		]);
		Chassis::find($request->id)->update([
			'chassis_no' =>$request->chassis_no,
		]);
	    toastr()->success('Data has been saved successfully!');
		return redirect(url('/admin/input'));
	}

	// Route Insert
	function input_route(Request $request){
		$request->validate([
			'bus_route' => 'required|string',
		]);
		BusRoute::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Edit Bus Route
	function edit_busroute($id){
		$single_bus_route = BusRoute::find($id);
		return view('admin.input.busroute_edit',compact('single_bus_route'));
	}

	// Update bus route
	function update_busroute(Request $request){
		$request->validate([
			'bus_route' => 'required|string',
		]);
		BusRoute::find($request->id)->update([
			'bus_route' =>$request->bus_route,
		]);
	    toastr()->success('Data has been saved successfully!');
		return redirect(url('/admin/input'));
	}

	// Operator Insert
	function input_operator(Request $request){
		$request->validate([
			'operator_name' => 'required|string',
		]);
		Operator::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Operator Edit
	function edit_operator($id){
		$single_operator = Operator::find($id);
		return view('admin.input.bus_operator_edit',compact('single_operator'));
	}

	// Operator Update
	function update_operator(Request $request){
		$request->validate([
			'operator_name' => 'required|string',
		]);
		Operator::find($request->id)->update([
			'operator_name' =>$request->operator_name,
		]);
	    toastr()->success('Data has been saved successfully!');
		return redirect(url('/admin/input'));
	}

	// Input date
	function input_date(Request $request){
		$request->validate([
			'date' => 'required|string',
		]);
	    toastr()->success('Data has been added successfully!');
		Date::insert($request->except('_token'));
		return back();
	}

	// Edit Date
	function edit_date($id){
		$single_date = Date::find($id);
		return view('admin.input.date_edit',compact('single_date'));
	}

	// Update Date
	function update_date(Request $request){
		$request->validate([
			'date' => 'required|string',
		]);
		Date::find($request->id)->update([
			'date' =>$request->date,
		]);
	    toastr()->success('Data has been saved successfully!');
		return redirect(url('/admin/input'));
	}

	// Departure Time insert
	function input_time(Request $request){
		DepartureTime::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
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
	    toastr()->success('Data has been saved successfully!');
		return redirect(url('/admin/input'));
	}

	// Bus Type Insert
	function input_bus_type(Request $request){
		$request->validate([
			'bus_type' => 'required|string',
		]);
		BusType::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Edit Bus Type
	function edit_bus_type($id){
		$single_bus_type = BusType::find($id);
		return view('admin.input.bus_type_edit',compact('single_bus_type'));
	}

	// Update Bus Type
	function update_bus_type(Request $request){
		$request->validate([
			'bus_type' => 'required|string',
		]);

		BusType::find($request->id)->update([
			'bus_type' =>$request->bus_type,
		]);
		toastr()->success('Data hase been updated successfully!');
		return redirect(url('/admin/input'));
	}

	// Total seat insert
	function input_total_seat(Request $request){
		TotalSeat::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Edit total seat
	function edit_total_seat($id){
		$single_total_seat = TotalSeat::find($id);
		return view('admin.input.total_seat_edit',compact('single_total_seat'));
	}

	// Update Total seat
	function update_total_seat(Request $request){
		$request->validate([
			'total_seat' =>'required|string',
 		]);
		TotalSeat::find($request->id)->update([
			'total_seat' =>$request->total_seat,
		]);
		toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	// Ticket Price Insert
	function input_ticket_price(Request $request){
		TicketPrice::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Edit Ticket Price
	function edit_ticket_price($id){
		$single_ticket_price = TicketPrice::find($id);
		return view('admin.input.ticket_price_edit',compact('single_ticket_price'));
	}

	

	

	

	

	
}
