<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $this->middleware('status');
    }
    // Customer Seat view
    function bus_seat($id)
    {

      $allSeat = null;

       //Bus Chassis
       $bus_chassis_id = Bus::findOrFail($id)->chassis_no_id;
       $bus_chassis = Chassis::findOrFail($bus_chassis_id)->chassis_no;
       // echo $bus_chassis;

      $allBookedTickets = TicketBooking::where('bus_chassis',$bus_chassis)->where('payment_status', 1)->get();
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
       $customer_gender = User::findOrFail(Auth::id())->gender;

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

    	return view('customer.bus_seat',compact('single_id','terminal','ticket_price','customer_name','customer_gender','customer_phone','operator_name','journey_date','departure_time','departure','destination','bus_route','coach_type','total_seat','bus_chassis','finalSeat'));
    }

// Customer Bus Info
    function bus_info()
    {
      $all_dates = Date::all();
      $all_departure = DepartureInfo::all();
      $all_destination = Destination::all();
    	$all_bus_info = Bus::all();
        return view('customer.bus_info',compact('all_bus_info','all_dates','all_departure','all_destination'));
    }
    // Customer Journey Details
    function journey_deatais(){
      return view('customer.journey_deatails');
    }


    // Search bus info
    function search(){
      return view('customer.search');
    }

    // Customer Booking Information
    function booking_info()
    {
      $time = \DB::table('ticket_bookings')->where('created_at', '>',Carbon::now()->subHours(3)->toDateTimeString());
      $single_booking_info = TicketBooking::where('payment_status', 1)->get();
      $deleted_booking_info = TicketBooking::onlyTrashed()->where('payment_status', 1)->paginate(6);
      return view('customer.booking_info',compact('single_booking_info','deleted_booking_info','time'));
    }

    // Customer Booking Info delete
    function delete_booking_info($id)
    {
      TicketBooking::findOrFail($id)->delete();
      toastr()->info('You have canceled booking Successfully!');
      return back();
    }

    // Customer Ticket view
    function ticket_view($id)
    {
      $journey_date = TicketBooking::findOrFail($id)->journey_date;
      $customer_name = TicketBooking::findOrFail($id)->customer_name;
      $customer_phone = TicketBooking::findOrFail($id)->phone;
      $customer_gender = TicketBooking::findOrFail($id)->gender;
      $departure_time = TicketBooking::findOrFail($id)->departure_time;
      $bus_route = TicketBooking::findOrFail($id)->bus_route;
      $bus_name = TicketBooking::findOrFail($id)->bus_name;
      $bus_type = TicketBooking::findOrFail($id)->bus_type;
      $bus_chassis = TicketBooking::findOrFail($id)->bus_chassis;
      $departure = TicketBooking::findOrFail($id)->departure;
      $destination = TicketBooking::findOrFail($id)->destination;
      $seat_no = TicketBooking::findOrFail($id)->seat_no;
      $total_seat = TicketBooking::findOrFail($id)->total_seat;
      $ticket_price = TicketBooking::findOrFail($id)->ticket_price;
      $total_price = TicketBooking::findOrFail($id)->total_price;
      $terminal = TicketBooking::findOrFail($id)->terminal;
      $payment_status = TicketBooking::findOrFail($id)->payment_status;
      return view('customer.view_ticket',compact(
        'journey_date',
        'customer_name',
        'customer_phone',
        'customer_gender',
        'departure_time',
        'bus_route',
        'bus_name',
        'bus_type',
        'bus_chassis',
        'departure',
        'destination',
        'seat_no',
        'total_seat',
        'ticket_price',
        'total_price',
        'terminal',
        'payment_status'
      ));
    }

    // View Trashed boooking info
    // function trashed_booking_info()
    // {
    //   $deleted_booking_info = TicketBooking::onlyTrashed()->paginate(6);
    //   return view('customer.booking_info',compact('deleted_booking_info'));
    // }







//End
}
