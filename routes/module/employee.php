<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

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
