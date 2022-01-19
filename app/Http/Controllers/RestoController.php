<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $list = Restaurant::all();
        return view('list',['data'=>$list]);
    }

    public function add(Request $request)
    {
        $add = new Restaurant();

        $add->name = $request->name;
        $add->email = $request->email;
        $add->address = $request->address;
        $add->save();
        // $add->session()->flash('message','Restaurant Added');

        return redirect('list')->with('message','Restaurant Added'); 
    }
}
