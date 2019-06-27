<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class profileController extends Controller
{
    public function index(){
       $employee = Auth::user();
       return view('employee.eprofile')->with('employee', $employee);
      //  $user['user'] = DB::table('users')->get();
       // if(count ($user)>0){
       // return view('employee.eprofile',$user);
       // }
       // else
       // {
        //    return view('login');
       // }
    }

}
