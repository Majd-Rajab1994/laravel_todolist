<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view("signup");
    }
    public function create(Request $request){
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');
        $email = $request->input('email');
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('user.signin')->with('sumsg','captcha error');
        }
        else {
            if($name==null || $username == null || $password == null || $email == null)
            {
                return redirect()->route('user.signup')->with('sumsg','please fill all fields');
            }
            elseif($password != $cpassword)
            {
                return redirect()->route('user.signup')->with('sumsg','please enter right password');
            }
            else
            {
                $checkuser = users::where('name',$name)->orwhere('username',$username)->count();
                if ($checkuser > 0) {
                    return redirect()->route('user.signup')->with('sumsg','that user already exist');
                }
                else
                {
                    $user = new users();
                    $user->name = $name;
                    $user->username = $username;
                    $user->password = Hash::make($password);
                    $user->email =$email;
                    $user->save();
                    return redirect()->route('user.signin');
                }
            }
        }
    }
}
