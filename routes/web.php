<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/product', [App\Http\Controllers\ProductController::class, "getAll"])->name('product.list');
    Route::get('/product/detail/{id}', [App\Http\Controllers\ProductController::class, 'getProductId'])->name('product.detail');
    Route::get('/product/category/{category}', [App\Http\Controllers\ProductController::class, 'getProductByCategory'])->name('product.category');
});

