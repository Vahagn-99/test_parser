<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('scv_all');

Route::post('/upload-CSV', [ProductController::class, 'uploadCSV'])->name(
    'csv_import'
);
Route::get('/show/{product}', [ProductController::class, 'show'])->name(
    'scv_show'
);
