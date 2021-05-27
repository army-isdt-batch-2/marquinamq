<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

Route::get('/leaves', [
    App\Http\Controllers\LeavesController::class,
    'leaves'
]);
Route::get('/leaves/create', [
    App\Http\Controllers\LeavesController::class,
    'add'
]);
