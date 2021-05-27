<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

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
