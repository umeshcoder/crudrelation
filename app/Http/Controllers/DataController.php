<?php

namespace App\Http\Controllers;
use App\Models\member;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function data()
    {
        $member = member::with('group')->get();
        return view('dairy.data')->with(compact('member'));
    }

    public function acess(){
        return view('dairy.index');
    }
}
