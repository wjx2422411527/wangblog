<?php

namespace App\Http\Controllers;

use App\Models\Login;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }
    //                      Request获取表单元素
    public function dologin(Request $request){
        // 获取用户名和密码
        // 判断用户名和密码是否存在
        if($request->username && $request->pass){
            // 如果存在就和数据库对比是否一致
            $data = Login::where('user',$request->username)->where('password',md5($request->pass))->first();
            if($data){
                // 如果用户名密码存在就跳转到后台路由
                return redirect()->route('admin');
            }
            else
            {
                // 如果不存在就跳转到当前登录页
                return redirect()->route('login');
            }
        }
    }
}