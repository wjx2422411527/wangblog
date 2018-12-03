<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add(){
        return view('admin.add');
    }
}
