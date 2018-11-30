<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function rule(){
        return view('admin.rule');
    }
}
