<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoansController extends Controller
{
    public function loans() 
    {
    return view('loan');
    }
    public function add() 
    {
    return view('loan.create');
    }
}
