<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class select2 extends Controller
{
    function index(){
        return view('select2');
    }
    function show(request $request){
        $q = $request->input('q');

        $data = todos::where('name','like','%'.$q.'%')->get();
        echo json_encode($data);
        //echo $data;
    }
}
