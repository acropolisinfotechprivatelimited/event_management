<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sassyModel;
use Auth;
use DB;

class sassyController extends Controller
{
    public function display(){
        return view('sassy');
    }
    public function index(){
        $sassy = sassyModel::all();
        return view('employee.empsassy')->with('sassy', $sassy);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'decision' => 'required',
            'description' => 'required'
        ]);
        $sassy = new sassyModel;
        $sassy->decision = $request->input("decision");
        $sassy->description = $request->input("description");
        $sassy->save();

        return redirect('sassy')->with('success','Message has been sent');

    }

  /*  public function alldata(){
        $user = sassyModel::count();

        return $user;
      // return view('employee.empheader', compact('user'));
      // $employee = DB::select('select * from users');
       //return view('employee.empheader',['employee'=>$employee]);
    } */


}
