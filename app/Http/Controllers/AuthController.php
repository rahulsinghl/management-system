<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
	public function login(){
		return view('login');
	

     }
     public function signin(Request $request){
     	$request->validate(['email'=>'required',
     		'password'=>'required']);
          // return response()->json(['status'=>400,'errors'=>['error'=>$request->all()]]);
	     
         if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
	     {
	     	$request->session()->flash('sucess','sucessfully login');
	     	return response()->json(['status'=>200]);

	     }
	     else{
	     	$request->session()->flash('error','incorrect id password');
	     	return response()->json(['status'=>400,'errors'=>['error'=>'incorrect id password']]);
	     }
    //
    }
    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');

    }
    public function dashboard(){
    	return view('dashboard');
    }
}
