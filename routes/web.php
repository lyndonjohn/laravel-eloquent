<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Your homepage
Route::get('/', function () {
    return view('welcome');
});

// Displays the categories table
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

// Displays the category create form
Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

// Endpoint for submitting a category create form
Route::post('/categories/create', [CategoryController::class, 'store'])
    ->name('categories.create');

// Displays the category edit form with wildcard {category}
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])
    ->name('categories.edit');

// Endpoint for submitting a category edit form
Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])
    ->name('categories.edit');

// Endpoint for submitting a category delete form
Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])
    ->name('categories.delete');

// Displays the products table
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

// Displays the product create form
Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

// Endpoint for submitting a product create form
Route::post('/products/create', [ProductController::class, 'store'])
    ->name('products.create');

// Displays the product edit form
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])
    ->name('products.edit');

// Endpoint for submitting a product edit form
Route::post('/products/edit/{product}', [ProductController::class, 'update'])
    ->name('products.edit');

// Endpoint for submitting a product delete form
Route::post('/products/delete/{product}', [ProductController::class, 'destroy'])
    ->name('products.delete');
