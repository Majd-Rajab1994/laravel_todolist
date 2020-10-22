<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_posts;

class scroll extends Controller
{
    public function index()
    {
        $count = tbl_posts::count();
        $array = tbl_posts::orderByDesc('id')->limit(7)->get();
        $data = [
            'data'=> $array,
            'count'=>$count
        ];
        return view('scroll',$data);
    }
    public function getData(request $request)
    {
        $lid = $request->input('lid');
        $array = tbl_posts::where('id','<',$lid)->orderByDesc('id')->limit(7)->get();
        if($array)
        {
            foreach($array as $data)
            {
                echo '<div class="post-item" id="'.$data['id'].'">
                <p class="post-title">'.$data['title'].'</p>
                <p>'.$data['content'].'</p>
                </div>';
            }
        }
    }
}
