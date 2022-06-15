<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

//imports and exports
require __DIR__ . '/import.php';
