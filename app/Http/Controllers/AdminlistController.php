<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminlistController extends Controller
{
    public function adminlist(){
        return view('admin.admin');
    }
}
