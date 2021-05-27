<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

Route::get('/deductions', [
    App\Http\Controllers\DeductionsController::class,
    'deductions'
]);
Route::get('/deductions/create', [
    App\Http\Controllers\DeductionsController::class,
    'add'
]);
