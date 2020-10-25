<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\testmail;

class mailController extends Controller
{
    public function index()
    {
        return view('mails.testmail');
    }
    public function sendemail(Request $requset)
    {
        $details = [
            'title' => $requset->input('title'),
            'body' => $requset->input('details'),
            'subject' => $requset->input('subject')
        ];
        $to = $requset->input('sendto');
        mail::to($to)->send( new testmail($details) );
        echo "seccess";

    }
}
