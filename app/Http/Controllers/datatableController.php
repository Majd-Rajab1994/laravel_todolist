<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class datatableController extends Controller
{
    public function index()
    {
        return view('datatable');
    }
    public function show()
    {
        $user_id = session('userid');
        $data = todos::where('user_id',$user_id)->get();
        echo '{"data": '.json_encode($data) .'}';
    }
    public function create(request $request)
    {
        $todo = new todos();
        $todo->name = $request->input('name1');
        $todo->user_id = session('userid');
        $todo->is_deleted = 0;
        $todo->save();
    }
}
