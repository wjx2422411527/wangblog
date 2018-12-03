<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberaddController extends Controller
{
    public function memberadd(){
        return view('admin.memberadd');
    }
}
