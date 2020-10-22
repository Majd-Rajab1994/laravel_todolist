<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiformController extends Controller
{
    public function index()
    {
        return view('apiview');
    }
    public function show()
    {
        $val = Http::get(route('apitest'));
        echo '{"data":['.$val.']}';
    }
    public function create(request $request)
    {
        $val = Http::post(route('apicreate'),[
            'name'=> $request->input('name1')
    ]);
        echo '{"data":['.$val.']}';
    }
}
