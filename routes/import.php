<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('/upload-CSV', [ProductController::class, 'uploadCSV'])->name(
    'csv_import'
);
Route::get('/show', function () {
    return view('show');
});
