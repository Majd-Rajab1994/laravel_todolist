<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;

use Illuminate\Http\Request;

class captchController extends Controller
{
    public function refresh()
    {
        //return response()->json(['captcha' => captcha_img()]);
        return captcha_img();

    }
}
