<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeavesController extends Controller
{
    public function leaves() 
    {
    return view('leave');
    }
    public function add() 
    {
    return view('leave.create');
    }
}
