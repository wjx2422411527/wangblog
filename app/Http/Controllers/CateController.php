<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CateController extends Controller
{
    public function cate(){
        return view('admin.cate');
    }
}
