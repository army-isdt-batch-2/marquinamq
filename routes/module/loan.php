<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

Route::get('/loans', [
    App\Http\Controllers\LoansController::class,
    'loans'
]);
Route::get('/loans/create', [
    App\Http\Controllers\LoansController::class,
    'add'
]);
