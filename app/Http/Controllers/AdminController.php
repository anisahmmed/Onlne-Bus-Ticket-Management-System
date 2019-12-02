<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Chassis;
use Alert;

class AdminController extends Controller
{
    // function __construct(){
    //     $this->middleware('role');
    // }
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










//end
}
