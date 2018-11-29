<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // 显示主页面
    public function index(){
        return view('index.index');
    }
}
