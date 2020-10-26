<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;


class apiformController extends Controller
{
    public function index()
    {
        return view('apiview');
    }
    public function show()
    {
        //$val = Http::get(route('apitest'));
        $val = Http::get('https://api.mocki.io/v1/ce5f60e2');
        $val->json();
        //echo $val;
        echo '{"data":['.$val.']}';
    }
    public function create(request $request)
    {
        //$url = route('apicreate');
        $url = 'http://dummy.restapiexample.com/api/v1/create';
        $val = Http::post($url,[
            'name'=> $request->input('name1'),
            'salary' => '123',
            'age' => '123'
    ]);
        echo '{"data":['.$val.']}';
    }
}
