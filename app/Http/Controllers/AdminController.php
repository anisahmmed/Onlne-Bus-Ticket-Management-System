<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Chassis;
use Alert;
use PDF;
use App\Bus;
use App\TicketBooking;

class AdminController extends Controller
{
    function __construct(){
        $this->middleware('auth');
        $this->middleware('restrict_user');
    }
    function index()
    {
    	return view('admin.index');
    }

    // Users list
    function users_info(){
    	$users = User::latest()->paginate(10);
    	return view('admin.user_info.users_info',compact('users'));
    }


    // Users Edit
    function edit($id){

    	$single_user_info = User::find($id);
    	return view('admin.user_info.user_info_edit', compact('single_user_info'));

    }

    // Create USer index
    function user_create_index(){
        return view('admin.agent.index');
    }

    //Insert user
    function create_user(Request $request){
        User::insert([
            'name' =>$request->name,
            'role_id' =>$request->role_id,
            'status_id' => $request->status_id,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'password' =>Hash::make($request->password),
        ]);
        toastr()->success('User has been created Successfully!');
        return redirect(route('users_info'));
    }


    // Users Update
    function user_update(Request $request){

    	User::find($request->id)->update([
    		'name' => $request->name,
            'status_id' =>$request->status_id,
    		'email' => $request->email,
    		'phone' => $request->phone,
    	]);
    	toastr()->success('Data has been Updated Successfully!');
    	// return redirect('/admin/users_info');
        return redirect(route('users_info'));
    }


    // Users Delete
	function delete($id){

    	User::findOrFail($id)->delete();
        toastr()->error('User has been Deleted');
    	return back();
	}





  // DomPDF
    public function generatePDF($chassis)
    {
      $busName='';
      $chassis='';
      $distination='';
      $journey='';
      $depature='';
      $seats='';
      $totalSeat=0;
      $terminal='';
      $ticketPrice=0;
      $totalPrice=0;

      $ticket_detail = TicketBooking::where('bus_chassis',$chassis)->get();
      foreach ($ticket_detail as $key => $value) {
        $busName=$value->bus_name;
        $chassis=$value->bus_chassis;
        $distination=$value->destination;
        $journey=$value->journey_date;
        $depature.=$value->terminal."-".$value->departure_time." , ";
        // $depature=array_push($depature,$value->departure_time);
        $seats.=$value->seat_no;
        $totalSeat+=$value->total_seat;
        $ticketPrice=$value->ticket_price;
        $totalPrice+=$value->total_price;
      }





        $data = [
          'busName'=>"krgn",
        ];
        $pdf = PDF::loadView('admin.myPDF',$data);

        // return $pdf->download('itsolutionstuff.pdf');
        return $pdf->stream();
    }

    function show_bus_chassis(){
      $all_bus_info = TicketBooking::all();
      return view('admin.report_single_bus',compact('all_bus_info'));
    }

    // show_bus_details
    function show_bus_details(Request $request)
    {
      $busName='';
      $chassis='';
      $distination='';
      $journey='';
      $depature='';
      $seats='';
      $totalSeat=0;
      $terminal='';
      $ticketPrice=0;
      $totalPrice=0;

      $ticket_detail = TicketBooking::where('bus_chassis',$request->chassis)->get();
      foreach ($ticket_detail as $key => $value) {
        $busName=$value->bus_name;
        $chassis=$value->bus_chassis;
        $distination=$value->destination;
        $journey=$value->journey_date;
        $depature.=$value->terminal."-".date('h:i A', strtotime($value->departure_time))." , ";
        // $depature=array_push($depature,$value->departure_time);
        $seats.=$value->seat_no;
        $totalSeat+=$value->total_seat;
        $ticketPrice=$value->ticket_price;
        $totalPrice+=$value->total_price;
      }
      
      return view('admin.show_bus_report',compact(
        'busName',
        'chassis',
        'distination',
        'journey',
        'depature',
        'seats',
        'totalSeat',
        'terminal',
        'ticketPrice',
        'totalPrice',
      ));
    }












//end
}
