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

    public function edit($id)
    {
        $resto = Restaurant::find($id);
        return view('edit',['data'=>$resto]);
    }

    public function update(Request $request,$id)
    {
        $add =Restaurant::find($id);


        $add->name = $request->name;
        $add->email = $request->email;
        $add->address = $request->address;
        $add->save();
        // $add->session()->flash('message','Restaurant Added');

        return redirect('list')->with('message','Restaurant Updated');
    }

    public function delete($id)
    {
        $del = Restaurant::find($id);
        $del->delete();

        return redirect('list')->with('message','Restaurant Deleted');
    }
}
