<?php

namespace App\Http\Controllers;

use App\Models\Login;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    public function dologin(Request $request){
        if($request->username && $request->pass){
            $data = Login::where('user',$request->username)->where('password',md5($request->pass))->first();
            if($data){
                return redirect()->route('admin');
            }
            else
            {
                return redirect()->route('login');
            }
        }
    }
}
