<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class storageController extends Controller
{
    public function index()
    {
        //echo asset('storage/mm.txt');
        //Storage::disk('public')->put('file.txt', 'Contents');
        //echo Storage::get('file.txt');;
        return view('storage');
    }
    public function save(Request $request)
    {
        $path = $request->file('photo')->store('photos');
        echo "good";
    }
}
