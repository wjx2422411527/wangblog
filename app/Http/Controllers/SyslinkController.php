<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyslinkController extends Controller
{
    public function syslink(){
        return view('admin.syslink');
    }
}
