<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Create test data
    public function createTestData()
    {
        Product::create(['name' => 'Apple', 'price' => 50]);
        Product::create(['name' => 'Banana', 'price' => 20]);
        Product::create(['name' => 'Orange', 'price' => 30]);

        return 'Test data created!';
    }
}
