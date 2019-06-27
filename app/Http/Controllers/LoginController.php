<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect(url('empprofile'));
        }
        return view('login');
    }

    public function store(Request $request){

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

         $user_data = array(
             'email' => $request->input('email'),
             'password' => $request->input('password')
         );


     if(Auth::attempt($user_data)){
            return redirect("/profile");
            //echo "yes match";
        } else{
            //echo "not match";
           // return redirect('/login')->with('success', 'Registration Successful.');
           return redirect('/log-in')->with('message', 'Email and Password not exit');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/log-in');
    }
}
