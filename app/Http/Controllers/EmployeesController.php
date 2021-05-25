<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function employees() 
    {
    return view('employee');
    }

    public function add() 
    {
    return view('employee.create');
    }
}
