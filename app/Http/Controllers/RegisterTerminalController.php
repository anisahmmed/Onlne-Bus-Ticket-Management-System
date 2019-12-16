<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use App\BoardingPoint;
use App\RegisterTerminal;
use App\Operator;

class RegisterTerminalController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
		$this->middleware('restrict_user');
	}
	//Register Terminal Index
	function index(){
		$all_bus = Bus::all();
		$all_terminal = BoardingPoint::all();
		return view('admin.terminal_register.index',compact('all_bus','all_terminal'));
	}

    //Register Terminal
	function register_terminal_info(){
		$all_register_terminal = RegisterTerminal::all();
		return view('admin.terminal_register.regis_terminal_info',compact('all_register_terminal'));
	}

	//Register Terminal insert
	function register_terminal_insert(Request $request){
		RegisterTerminal::insert([
			'boarding_point_id' =>$request->terminal_id,
			'bus_id' =>$request->operator_id,
		]);
		toastr()->success('Data has been added successfully!');
		return redirect(route('terminal_register'));
	}

	//Register Terminal Edit
	function register_terminal_edit($id){
		$all_operator = Operator::all();
		$all_terminal = BoardingPoint::all();
		$single_register_terminal = RegisterTerminal::find($id);
		return view('admin.terminal_register.regis_terminal_edit',compact('single_register_terminal','all_operator','all_terminal'));
	}

	//Register terminal update
	function register_terminal_update(Request $request){
		RegisterTerminal::find($request->id)->update([
			'terminal_id' =>$request->terminal_id,
			'operator_id' =>$request->operator_id,
		]);
		toastr()->success('Data has been Updated successfully!');
		return redirect(route('terminal_register'));

		}

	//End
}
