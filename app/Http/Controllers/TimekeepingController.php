<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimekeepingController extends Controller
{
    public function timekeeping() 
    {
    return view('timekeeping');
    }
    public function add() 
    {
    return view('timekeeping.create');
    }
    public function show() 
    {
    return view('timekeeping.view');
    }
}
