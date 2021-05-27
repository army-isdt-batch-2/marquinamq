<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
]);
