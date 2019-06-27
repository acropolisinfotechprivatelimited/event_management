<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\misModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Auth;

class misController extends Controller
{
    public function index(){
        return view('misllaneous');
    }


        public function store(Request $request)
        {
            //
            $this->validate($request,[
                'name' => 'required',
                'venue' => 'required',
                'description' => 'required',
                'date' => 'required'
            ]);


            $user = new misModel;
            $user->name = Input::get('name');
            $user->venue = Input::get('venue');
            $user->description = Input::get('description');
            $user->date = Input::get('date');
            $user->save();

            return redirect('mis')->with('success','message has been sent ');

        }

        public function display(){
            $miss = misModel::all();
            return view('employee.empmiss')->with('miss', $miss);
        }
}
