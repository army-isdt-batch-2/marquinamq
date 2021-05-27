<?php

use Illuminate\Support\Facades\Route;

foreach (glob(__DIR__ . '/modules/*.php') as $filename) {
    include $filename;
}

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
]);
 