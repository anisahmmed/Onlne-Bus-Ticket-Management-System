<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chassis;
use Alert;

class AdminController extends Controller
{
    function index()
    {
    	return view('admin.index');
    }

// Users list

    function users_info(){
    	$users = User::latest()->paginate(6);
    	return view('admin.users_info',compact('users'));
    }

    
// Users Edit
    
    function edit($id){
    	$single_user_info = User::find($id);
    	return view('admin.user_info_edit', compact('single_user_info'));

    }

// Users Update

    function user_update(Request $request){

    	User::find($request->id)->update([
    		'name' => $request->name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    	]);
    	Alert::toast('Record Updated Successfully','success');
    	// return redirect('/admin/users_info');
        return back();
    }

// Users Delete

	function delete($id){
	    	User::findOrFail($id)->delete();
            Alert::toast('Record Updated Successfully','delete');
	    	return back();
	    }








}
