<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class apiController extends Controller
{
    public function index()
    {
        $data = todos::all();
        return $data;
    }
    public function show($id)
    {
        $data = todos::findOrFail($id);
        return $data;
    }
    public function create(request $request)
    {
        $todo = new todos();
        $todo->name = $request->input('name');
        $todo->user_id = $request->input('userid');
        $todo->is_deleted = 0;
        $todo->save();
        return response()->json($todo, 201);
    }
    public function update(request $request,$id)
    {
        $name = $request->input('name1');
        return response()->json(todos::where('id',$id)->update('name',$name), 200);
    }
    public function delete(request $request,$id)
    {
        return response()->json(todos::where('id',$id)->update('is_deleted',1), 200);
    }
}
