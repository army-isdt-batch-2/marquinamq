<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

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
