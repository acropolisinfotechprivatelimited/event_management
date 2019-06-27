<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sizzlerModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Auth;

class sizzlerController extends Controller
{
    public function index(){

        return view('sizzler');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'decision' => 'required',
            'description' => 'required'
        ]);
        $user = new sizzlerModel;
        $user->decision = Input::get("decision");
        $user->description = Input::get("description");
        $user->save();

        return redirect('sassy')->with('success','Message has been sent');

    }
    public function display(){
        $sizzler = sizzlerModel::all();
        return view('employee.empsizzler')->with('sizzler', $sizzler);
    }
}
