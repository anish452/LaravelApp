<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

// Display all products
Route::get('/products', [ProductController::class, 'index']);

// Create test data
Route::get('/products/testdata', [ProductController::class, 'createTestData']);
