<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adminModel;


class adminController extends Controller
{
    public function index(){

        return view("adminlogin");
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'password' => 'required',
        ]);

        // $user_data = array(
          //   'name' => $request->input('name'),
            // 'password' => $request->input('password')
         //);


     //if(Auth::attempt($user_data)){
       //     return redirect("/empprofile");
       // } else{
         //  return redirect('/admin')->with('message', 'Name and Password not exit');
       // }

       $name = $request->get('name');
       $password = $request->get('password');

       $checkuser = adminModel::selectRaw("count(*) as Total")->where('name','=',$name)->first();

       if(intval($checkuser->Total) > 0){

        $getpassword = adminModel::select("password")->where('name','=',$name)->first();
        if(password_verify($password,$getpassword->password)){
            $request->session()->put('name',$name);
            return redirect('/empprofile');
        }else{
            return redirect('/admin')->with('message', 'Name and Password not exit');
        }

       }else{
           return redirect('/admin')->with('message', 'Name and Password not exit');
       }

    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/admin');
    }
}
