<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Redirect;

class EmployeesController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function employees() 
    {
    return view('employee')->with([
        'data' => Employee::all()
    ]);    
    }

    public function add() 
    {
    return view('employee.create');
    }
    public function save()
    {
         Employee::create(
             $this->request->except('_token'));

        return Redirect::route('employees');
    }
}
