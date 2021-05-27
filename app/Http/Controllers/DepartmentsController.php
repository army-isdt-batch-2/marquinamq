<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Redirect;

class DepartmentsController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function departments() 
    {
        return view('department')->with([
            'data' => Department::all()
        ]);
    }
    
    public function add() 
    {
    return view('department.create');
    }

    public function save()
    {
         Department::create(
             $this->request->except('_token'));

        return Redirect::route('departments');
    }
}
