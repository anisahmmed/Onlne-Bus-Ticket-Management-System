<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;
use Alert;
class RegisterController extends Controller
{

     /**
     * Where to redirect users after registration.
     */
    protected $redirectTo = '/customer_register';


    function register(Request $request)
        {

            $request->validate([
                'name' => 'required|string|max:80',
                'email' => 'required|email|unique:users|max:80',
                'phone' => 'required|numeric|min:11',
                'password'=>'required|string|min:8|confirmed',
                'password_confirmation' => 'required|same:password'

            ],[
                'name.required'  =>  'User Name Is Required.',
                'email.email'    => 'You must enter your valid email address.',
                'email.required' => 'Applicant Email Is Required.',
                'phone.required' => 'Contact No Is Required.',
                'password.required' => 'Password Is Required.',
                'password_confirmation.required' => 'Confirm Password Is Required.',
                'password_confirmation.same:password' => 'Confirm Password must same as Password.',
            ]);

            User::insert([
            	'name'=>$request->name,
            	'email'=>$request->email,
            	'phone'=>$request->phone,
            	'password'=>Hash::make($request->password),
            ]);
            // $insert = User::insert($request->except('_token'));

            toastr()->success('Registration has been completed successfully!');
            return redirect(route('register'));
            
        }
}
