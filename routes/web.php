<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(RouteServiceProvider::HOME);
});

//imports and exports files
require __DIR__ . '/import.php';
