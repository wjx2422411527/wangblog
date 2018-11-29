<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    // 显示详情页面
    public function info(){
        return view('infon.info');
    }
}
