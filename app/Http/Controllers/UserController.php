<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\TicketBooking;
use Carbon\Carbon;
use App\Bus;
use App\RegisterTerminal;
use App\TicketPrice;
use App\User;
use App\Operator;
use App\Date;
use App\DepartureInfo;
use App\Destination;
use App\BusRoute;
use App\TotalSeat;
use App\BusType;
use App\Chassis;

class UserController extends Controller
{
    // function __construct(){
    //     $this->middleware('role');
    // }
    public function __construct()
    {
        $this->middleware('auth');
    }

    function bus_seat($id)
    {

      $allSeat = null;

       //Bus Chassis
       $bus_chassis_id = Bus::findOrFail($id)->chassis_no_id;
       $bus_chassis = Chassis::findOrFail($bus_chassis_id)->chassis_no;
       // echo $bus_chassis;

      $allBookedTickets = TicketBooking::where('bus_chassis',$bus_chassis)->get();
      foreach ($allBookedTickets as $key => $value) {
        $allSeat.=$value->seat_no;
      }

      $finalSeat = explode(",",$allSeat);
      array_pop($finalSeat);

      // print_r ($finalSeat);




       $single_id = $id;
       $terminal = RegisterTerminal::where('bus_id',$single_id)->get();

       //Ticket Price
       $ticket_price_id = Bus::findOrFail($single_id)->ticket_price_id;
       $ticket_price = TicketPrice::findOrFail($ticket_price_id)->ticket_price;

       //Customer name and phone
       $customer_name = User::findOrFail(Auth::id())->name;
       $customer_phone = User::findOrFail(Auth::id())->phone;

       //Operator name
       $operator_id = Bus::findOrFail($single_id)->operator_name_id;
       $operator_name = Operator::findOrFail($operator_id)->operator_name;

       //Bus Chassis
       $bus_chassis_id = Bus::findOrFail($single_id)->chassis_no_id;
       $bus_chassis = Chassis::findOrFail($bus_chassis_id)->chassis_no;

       //Journey Date
       $journey_date_id = Bus::findOrFail($single_id)->date_id;
       $journey_date = Date::findOrFail($journey_date_id)->date;

       //Departure time
       $departure_time_id = Bus::findOrFail($single_id)->departure_time_id;
       $departure_time = DepartureInfo::findOrFail($departure_time_id)->departure_time;

       // Departure
       $departure_id = Bus::findOrFail($single_id)->departure_id;
       $departure = DepartureInfo::findOrFail($departure_id)->departure;

       //Destination TIme
       $destination_id = Bus::findOrFail($single_id)->destination_id;
       $destination = Destination::findOrFail($destination_id)->destination;

       //Bus Route
       $bus_route_id = Bus::findOrFail($single_id)->bus_route_id;
       $bus_route = BusRoute::findOrFail($bus_route_id)->bus_route;

       //Bus TYpe
       $coach_type_id = Bus::findOrFail($single_id)->bus_type_id;
       $coach_type = BusType::findOrFail($coach_type_id)->bus_type;

       //Total seat
       $total_seat_id = Bus::findOrFail($single_id)->total_seat_id;
       $total_seat = TotalSeat::findOrFail($total_seat_id)->total_seat;

    	return view('customer.bus_seat',compact('single_id','terminal','ticket_price','customer_name','customer_phone','operator_name','journey_date','departure_time','departure','destination','bus_route','coach_type','total_seat','bus_chassis','finalSeat'));
    }


    function bus_info()
    {
    	$all_bus_info = Bus::all();
        return view('customer.bus_info',compact('all_bus_info'));
    }

    function journey_deatais(){
      return view('customer.journey_deatails');
    }


    // Search bus info
    function search(){
      return view('customer.search');
    }







//End    
}
