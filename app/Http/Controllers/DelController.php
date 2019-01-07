<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelController extends Controller
{
    public function del(){
        return view('admin.del');
    }
}
