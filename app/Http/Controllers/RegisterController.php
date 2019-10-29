<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
class RegisterController extends Controller
{
    function register(Request $request)
        {

            $request->validate([
                'name' => 'required|string|max:200',
                'email' => 'required|email|max:200',
                'phone' => 'required|numeric|min:11',
                'password'=>'required|string|min:6|confirmed',
                'password_confirmation' => 'required|same:password'

            ]);

            User::insert([
            	'name'=>$request->name,
            	'email'=>$request->email,
            	'phone'=>$request->phone,
            	'password'=>Hash::make($request->password),
            ]);
            // $insert = User::insert($request->except('_token'));

           return redirect(route('homepage'));
            
        }
}
