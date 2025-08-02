<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [ProductController::class, 'welcome'])->name('welcome');

Route::resource('product', \App\Http\Controllers\ProductController::class);
