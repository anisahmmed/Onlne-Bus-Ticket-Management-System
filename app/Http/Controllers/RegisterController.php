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
    protected $redirectTo = '/home';


    function register(Request $request)
        {

            $request->validate([
                'name' => 'required|string|max:80',
                'gender' => 'required|string',
                'email' => 'required|email|unique:users|max:80',
                'phone' => 'required|numeric|unique:users|min:11',
                'password'=>'required|string|min:8|confirmed',
                'password_confirmation' => 'required|same:password'

            ],[
                'name.required'  =>  'User Name Is Required.',
                'gender.required'  =>  'Gender Is Required.',
                'email.email'    => 'You must enter your valid email address.',
                'email.required' => 'Applicant Email Is Required.',
                'phone.required' => 'Contact No Is Required.',
                'password.required' => 'Password Is Required.',
                'password_confirmation.required' => 'Confirm Password Is Required.',
                'password_confirmation.same:password' => 'Confirm Password must same as Password.',
            ]);

            User::insert([
            	'name'=>$request->name,
            	'gender'=>$request->gender,
            	'email'=>$request->email,
            	'phone'=>$request->phone,
            	'password'=>Hash::make($request->password),
                'role_id' => 3,
                'status_id' =>1,
            ]);
            // $insert = User::insert($request->except('_token'));

            toastr()->success('Registration has been completed successfully!');
            return redirect(route('customer_regis'));

        }

        function customer_login(){
            return view('admin.login.customer_login');
        }

        function index(){
            return view('admin.login.customer_register');
        }
}
