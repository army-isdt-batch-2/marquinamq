<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayslipsController extends Controller
{
    public function payslips() 
    {
    return view('payslip');
    }
    public function add() 
    {
    return view('payslip.create');
    }
    public function show() 
    {
    return view('payslip.view');
    }
}
