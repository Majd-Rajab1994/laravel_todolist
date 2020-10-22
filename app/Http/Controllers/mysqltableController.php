<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class mysqltableController extends Controller
{
    public function index()
    {
        $user_id = session('userid');
        $data = todos::where('user_id',$user_id)->get();
        return view('mysqltable',['data'=>$data]);
    }
    public function create(request $request)
    {
        $todo = new todos();
        $todo->name = $request->input('name');
        $todo->user_id = session('userid');
        $todo->is_deleted = 0;
        $todo->save();
    }
    public function update(request $request)
    {
        $id = $request->input('id1');
        $name = $request->input('name1');
        todos::where('id',$id)->update('name',$name);
    }
    public function delete(request $request)
    {
        $id = $request->input('id1');
        todos::where('id',$id)->update('is_deleted',1);
    }
}
