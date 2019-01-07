<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembereditController extends Controller
{
    public function memberedit(){
        return view('admin.memberedit');
    }
}
