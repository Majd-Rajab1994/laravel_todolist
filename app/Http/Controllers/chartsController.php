<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\charts;

class chartsController extends Controller
{
    public function index(){
        $data = charts::select('name','per')->get();
        return view('charts',['data' => $data]);
    }
}
