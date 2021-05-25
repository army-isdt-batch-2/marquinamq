<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function departments() 
    {
    return view('department');
    }
    
    public function add() 
    {
    return view('department.create');
    }

}
