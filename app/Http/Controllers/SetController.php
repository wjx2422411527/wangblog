<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetController extends Controller
{
    public function set(){
        return view('admin.set');
    }
}
