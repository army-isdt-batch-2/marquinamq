<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeductionsController extends Controller
{
    public function deductions() 
    {
    return view('deduction');
    }
    public function add() 
    {
    return view('deduction.create');
    }
}
