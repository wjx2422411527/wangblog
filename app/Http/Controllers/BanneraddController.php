<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanneraddController extends Controller
{
    public function banneradd(){
        return view('admin.banneradd');
    }
}
