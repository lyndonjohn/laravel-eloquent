<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/categories/create', [CategoryController::class, 'store'])
    ->name('categories.create');

Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])
    ->name('categories.edit');

Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])
    ->name('categories.delete');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products/create', [ProductController::class, 'store'])
    ->name('products.create');

Route::get('/products/edit/{product}', [ProductController::class, 'edit'])
    ->name('products.edit');

Route::post('/products/edit/{product}', [ProductController::class, 'update'])
    ->name('products.edit');

Route::post('/products/delete/{product}', [ProductController::class, 'destroy'])
    ->name('products.delete');
