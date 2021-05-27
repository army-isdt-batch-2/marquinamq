<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
]);

Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
]);

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
]);


///// PAYROLL /////

Route::get('/departments', [
    App\Http\Controllers\DepartmentsController::class,
    'departments'
])->name('departments');

Route::get('/departments/create', [
       App\Http\Controllers\DepartmentsController::class,
    'add'
])->name('departments.add');


Route::post('/departments/save', [
    App\Http\Controllers\DepartmentsController::class,
    'save'
])->name('departments.save');

///// EMPLOYEES ////

Route::get('/employees', [
    App\Http\Controllers\EmployeesController::class,
    'employees'
])->name('employees');

Route::get('/employees/create', [
    App\Http\Controllers\EmployeesController::class,
    'add'
])->name('employees.create');

Route::post('/employees/save', [
    App\Http\Controllers\DepartmentsController::class,
    'save'
])->name('employees.save');

//// LOANS ////
Route::get('/loans', [
    App\Http\Controllers\LoansController::class,
    'loans'
]);
Route::get('/loans/create', [
    App\Http\Controllers\LoansController::class,
    'add'
]);

///// Leaves ////
Route::get('/leaves', [
    App\Http\Controllers\LeavesController::class,
    'leaves'
]);
Route::get('/leaves/create', [
    App\Http\Controllers\LeavesController::class,
    'add'
]);

///// MANDATORY DEDUCTION ///
Route::get('/deductions', [
    App\Http\Controllers\DeductionsController::class,
    'deductions'
]);
Route::get('/deductions/create', [
    App\Http\Controllers\DeductionsController::class,
    'add'
]);

//// TIMEKEEPING ////
Route::get('/timekeeping', [
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping'
]);
Route::get('/timekeeping/create', [
    App\Http\Controllers\TimekeepingController::class,
    'add'
]);
Route::get('/timekeeping/view', [
    App\Http\Controllers\TimekeepingController::class,
    'show'
]);

//// PAYSLIPS ////
Route::get('/payslips', [
    App\Http\Controllers\PayslipsController::class,
    'payslips'
]);
Route::get('/payslips/create', [
    App\Http\Controllers\PayslipsController::class,
    'add'
]);
Route::get('/payslips/view', [
    App\Http\Controllers\PayslipsController::class,
    'show'
]);
