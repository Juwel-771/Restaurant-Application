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
}
