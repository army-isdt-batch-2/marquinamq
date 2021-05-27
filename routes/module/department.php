<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

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
