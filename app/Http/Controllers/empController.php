<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Crypt;
class empController extends Controller
{
    public function display(){
        $user = User::all();
        return view('empprofile')->with('user', $user);
      //  $user['user'] = DB::table('users')->get();
       // if(count ($user)>0){
       // return view('employee.empprofile',$user);
       // }
       // else
       // {
         //   return view('login');
       // }

    }

  /*  public function edit_function($id){
        // $employee = DB::select('select * from users where id = ?', [$id]);
        // return view('employee.empedit',['employee'=>$employee]);
        $user = User::find($id);
        return view('employee.empedit')->with('user',$user);
    } */

 /*   public function update_function(Request $request,$id){

        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phonenumber = $request->input('phonenumber');
        $user->profession = $request->input('profession');

        if($request->hasfile('images')){
            $file= $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/user/', $filename);
            $user->images= $filename;

        }
        $user->save();
        return redirect('empprofile')->with('success', 'Data Updated.');
    } */

    public function edit_function(User $user)
    {
        $user = $user;
        return view('employee.empedit')->with('user',$user);
    }

    public function update(Request $request,User $user)
    {

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phonenumber = $request->input('phonenumber');
        $user->profession = $request->input('profession');

        if($request->hasfile('images')){
            $file= $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/user/', $filename);
            $user->images= $filename;

        }
        $user->save();
        return redirect('empprofile')->with('success', 'Data Updated.');
    }


}



