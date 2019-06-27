<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\adminModel;

class adminregistration extends Controller
{
    public function index(){
        return view('adminregistration');
    }

    public function store(request $request){

     $rule=$this->validate($request,[
        'name'=>'required',
        'password'=>'required',
        ]);

        $user = new adminModel;
        $user->name = $request->input('name');
        $user->password =  HASH::make($request->input('password'));

        $user->save();
        return redirect('/adminreg')->with('success', 'Registration Successful.');
    }

}
