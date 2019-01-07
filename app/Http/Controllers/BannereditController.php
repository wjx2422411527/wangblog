<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannereditController extends Controller
{
    public function banneredit(){
        return view('admin.banneredit');
    }
}
