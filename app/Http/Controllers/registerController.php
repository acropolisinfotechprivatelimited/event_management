<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;

class registerController extends Controller
{
    //
    public function index(){
        return view('registration');
    }

    public function store(request $request){

     $rule=$this->validate($request,[
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'phonenumber'=>'required',
        'profession'=>'required',
        'images'=>'required',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password =  HASH::make($request->input('password'));
        $user->phonenumber = $request->input('phonenumber');
        $user->profession = $request->input('profession');


        if($request->hasfile('images')){
            $file= $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/user/', $filename);
            $user->images= $filename;

        }
        else{
            $user->images = '';
        }
        $user->save();
        return redirect('/registration')->with('success', 'Registration Successful.');
    }


}

