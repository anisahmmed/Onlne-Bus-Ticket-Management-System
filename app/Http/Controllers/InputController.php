<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chassis;
use App\BusRoute;
use App\Operator;
use App\Date;
use App\DepartureInfo;
use App\Destination;
use App\BusType;
use App\TotalSeat;
use App\TicketPrice;
use App\BoardingPoint;
use App\RegisterTerminal;
use Image;

class InputController extends Controller
{
    // input
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('restrict_user');
    }
	function input(){
		$all_chassis_no = Chassis::paginate(4);
		$all_routes = BusRoute::paginate(4);
		$all_operators = Operator::paginate(4);
		$all_dates = Date::paginate(4);
		$all_departure_info = DepartureInfo::paginate(4);
		$all_destination = Destination::paginate(3);
		$all_bus_types = BusType::paginate(4);
		$total_seats = TotalSeat::paginate(4);
		$ticket_prices = TicketPrice::paginate(4);
		$all_boarding_point = BoardingPoint::paginate(4);
	    return view('admin.input',compact('all_chassis_no','all_routes','all_operators','all_dates','all_departure_info','all_destination','all_bus_types','total_seats','ticket_prices','all_boarding_point'));
	}
  // chassis no insert
	function input_chassis(Request $request){
		$request->validate([
			'chassis_no' => 'required|string|min:4',
		],[
        'chassis_no.required'  =>  'User Name Is Required.',
    ]);
	    Chassis::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
	    return back();
	}

	// Chassis Edit
	function edit_chassis($id){
		$single_chassis = Chassis::find($id);
		return view('admin.input_edit.chassis_edit',compact('single_chassis'));
	}

	// Chassis Info update
	function update_chassis(Request $request){
		$request->validate([
			'chassis_no' => 'required|string|min:4',
		]);
		Chassis::find($request->id)->update([
			'chassis_no' =>$request->chassis_no,
		]);
	    toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Delete chassis
	function delete_chassis($id){
		Chassis::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
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
		return view('admin.input_edit.busroute_edit',compact('single_bus_route'));
	}

	// Update bus route
	function update_busroute(Request $request){
		$request->validate([
			'bus_route' => 'required|string',
		]);
		BusRoute::find($request->id)->update([
			'bus_route' =>$request->bus_route,
		]);
	    toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Bus route Delete
	function delete_bus_route($id){
		BusRoute::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
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
		return view('admin.input_edit.bus_operator_edit',compact('single_operator'));
	}

	// Operator Update
	function update_operator(Request $request){
		$request->validate([
			'operator_name' => 'required|string',
		]);
		Operator::find($request->id)->update([
			'operator_name' =>$request->operator_name,
		]);
	    toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	// Bus Operator Delete
	function delete_bus_operator($id){
		Operator::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
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
		return view('admin.input_edit.date_edit',compact('single_date'));
	}

	// Update Date
	function update_date(Request $request){
		$request->validate([
			'date' => 'required|string',
		]);
		Date::find($request->id)->update([
			'date' =>$request->date,
		]);
	    toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Delete Date
	function delete_date($id){
		Date::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
	}

	// Departure Info insert
	function input_departure_info(Request $request){
		DepartureInfo::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Departure info edit
	function edit_departure_info($id){
		$single_departure_info = DepartureInfo::find($id);
		return view('admin.input_edit.departure_info_edit',compact('single_departure_info'));
	}

	// update departure info
	function update_departure_info(Request $request){
		DepartureInfo::find($request->id)->update([
			'departure' =>$request->departure,
			'departure_time' =>$request->departure_time,
		]);

	    toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Delete departure info
	function delete_departure_info($id){
		DepartureInfo::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
	}

	//Destination Info Insert
	function input_destination_info(Request $request){
		$last_inserted_id = Destination::insertGetId([
			'destination' =>$request->destination,
			'destination_scenario' =>$request->destination_scenario,
		]);

		if ($request->hasFile('destination_scenario')){
           $photo_upload     =  $request->destination_scenario;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  $last_inserted_id . "." . $photo_extension;
           Image::make($photo_upload)->resize(360,360)->save(base_path('public/uploads/destination/'.$photo_name),100);
           Destination::find($last_inserted_id)->update([
           'destination_scenario' => $photo_name,
         ]);
       }
       toastr()->success('Data has beeen added successfully!');
       return back();
	}

	//Edit destination info
	function edit_destination_info($id){
		$single_destination_info = Destination::find($id);
		return view('admin.input_edit.destination_edit',compact('single_destination_info'));
	}

	//Update destination
	function update_destination_info(Request $request){

		$request->validate([
			'destination' =>'required|string',
		]);

		Destination::find($request->id)->update([
			'destination' =>$request->destination,
			'destination_scenario' =>$request->destination_scenario,
		]);
		toastr()->success('Data has been Updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Delete destination
	function delete_destination_info($id){
		Destination::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
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
		return view('admin.input_edit.bus_type_edit',compact('single_bus_type'));
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

	//Delete bus type
	function delete_bus_type($id){
		BusType::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
	}

	// Total seat insert
	function input_total_seat(Request $request){
    $request->validate([
			'total_seat' =>'required|numeric',
		]);
		TotalSeat::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Edit total seat
	function edit_total_seat($id){
		$single_total_seat = TotalSeat::find($id);
		return view('admin.input_edit.total_seat_edit',compact('single_total_seat'));
	}

	// Update Total seat
	function update_total_seat(Request $request){
		$request->validate([
			'total_seat' =>'required|numeric',
 		]);
		TotalSeat::find($request->id)->update([
			'total_seat' =>$request->total_seat,
		]);
		toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Delete total seat
	function delete_total_seat($id){
		TotalSeat::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
	}

	// Ticket Price Insert
	function input_ticket_price(Request $request){
    $request->validate([
			'ticket_price' =>'required|numeric',
		]);
		TicketPrice::insert($request->except('_token'));
	    toastr()->success('Data has been added successfully!');
		return back();
	}

	// Edit Ticket Price
	function edit_ticket_price($id){
		$single_ticket_price = TicketPrice::find($id);
		return view('admin.input_edit.ticket_price_edit',compact('single_ticket_price'));
	}

	// Update Ticket Price
	function update_ticket_price(Request $request){
		$request->validate([
			'ticket_price' =>'required|numeric',
		]);
		TicketPrice::find($request->id)->update([
			'ticket_price' =>$request->ticket_price,
		]);
		toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Delete ticket price
	function delete_ticket_price($id){
		TicketPrice::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
	}

	// Terminal Insert
	function input_terminal(Request $request){
		$request->validate([
			'terminal_name' =>'required|string',
		]);
		BoardingPoint::insert($request->except('_token'));
		toastr()->success('Data has been added successfully!');
		return back();
	}

	// Terminal Edit
	function edit_terminal($id){
		$single_terminal = BoardingPoint::find($id);
		return view('admin.input_edit.terminal_edit',compact('single_terminal'));
	}
	// Terminal Update
	function update_terminal(Request $request){
		$request->validateI([
			'terminal_name' =>'required|string',
		]);
		BoardingPoint::find($request->id)->update([
			'terminal_name' =>$request->terminal_name,
		]);
		toastr()->success('Data has been updated successfully!');
		return redirect(url('/admin/input'));
	}

	//Delete terminal
	function delete_terminal($id){
		BoardingPoint::find($id)->delete();
		toastr()->error('Data has been Deleted');
		return back();
	}

















}
