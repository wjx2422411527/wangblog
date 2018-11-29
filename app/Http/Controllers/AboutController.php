<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //显示关于我的页面
    public function about(){
        return view('abouts.about');
    }

}
