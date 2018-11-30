<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShieldController extends Controller
{
    public function shield(){
        return view('admin.shield');
    }
}
