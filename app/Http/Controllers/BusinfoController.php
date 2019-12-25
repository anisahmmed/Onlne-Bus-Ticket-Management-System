<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;
use App\Businfo;
use App\Bus;
use App\BusType;
use App\Chassis;
use App\BusRoute;
use App\DepartureInfo;
use App\Destination;
use App\Operator;
use App\TotalSeat;
use App\TicketPrice;
use Carbon\Carbon;
use App\BoardingPoint;
use Alert;

class BusinfoController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('restrict_user');
    }
	// View Bus info form
	function bus_info_index(){
		$all_dates = Date::all();
		$all_chassises = Chassis::all();
		$all_buses = Bus::all();
		$all_routes = BusRoute::all();
		$all_departure_info = DepartureInfo::all();
		$all_destination = Destination::all();
		$all_bus_types = BusType::all();
		$all_operators = Operator::all();
		$all_seats = TotalSeat::all();
		$all_ticket_prices = TicketPrice::all();
		$all_terminals = BoardingPoint::all();
		return view('admin.bus.bus_info_insert_form',compact('all_dates','all_chassises','all_buses','all_routes','all_departure_info','all_destination','all_bus_types','all_operators','all_seats','all_ticket_prices','all_terminals'));
	}


	// Insert Bus Info
	function bus_info_insert(Request $request){
		Bus::insert($request->except('_token'));
		toastr()->success('Data has been added Successfully!');
		return redirect(route('view_bus_info'));
	}


	// Bus Information View
	function bus_info_view(){
		$all_buses = Bus::latest()->paginate(10);
		return view('admin.bus.bus_info',compact('all_buses'));
	}

	// Edit Bus Info
	function edit_bus_info($id){
		$all_dates = Date::all();
		$all_chassises = Chassis::all();
		$all_routes = BusRoute::all();
		$all_departure_info = DepartureInfo::all();
		$all_destination = Destination::all();
		$all_bus_types = BusType::all();
		$all_operators = Operator::all();
		$all_seats = TotalSeat::all();
		$all_ticket_prices = TicketPrice::all();
		$all_terminals = BoardingPoint::all();

		$single_bus_info = Bus::find($id);
		return view('admin.bus.edit_bus_info',compact('single_bus_info','all_dates','all_chassises','all_routes','all_departure_info','all_destination','all_bus_types','all_bus_types','all_operators','all_seats','all_ticket_prices','all_terminals'));
	}

	// Update bus Information
	function update_bus_info(Request $request){
		Bus::find($request->id)->update([
			'operator_name_id' => $request->operator_name_id,
			'chassis_no_id' => $request->chassis_no_id,
			'bus_type_id' => $request->bus_type_id,
			'bus_route_id' => $request->bus_route_id,
			'departure_id' => $request->departure_time_id,
			'departure_time_id' => $request->departure_time_id,
			'destination_id' => $request->destination_id,
			'total_seat_id' => $request->total_seat_id,
			'ticket_price_id' => $request->ticket_price_id,
			'terminal_id' => $request->terminal_id,
		]);
		toastr()->success('Data has been updated Successfully!');
		return redirect(route('view_bus'));
	}

	//Bus Information Delete
	function delete_bus_info($id){
		Bus::findOrFail($id)->delete();
		toastr()->error('Record has been Deleted!');
		return back();
	}

	// Trashed Bus Information view
	function trashed_bus_info(){
		$deleted_bus = Bus::onlyTrashed()->paginate(10);
		return view('admin.bus.trashed_bus_info',compact('deleted_bus'));
	}

	// Restore
	function restore($id){
		Bus::onlyTrashed()->where('id',$id)->restore();
		return back();
	}

}
