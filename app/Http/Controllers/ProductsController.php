<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::latest()->paginate(config('myapp.per_page'));
    	return view('products.index', compact('products'));
    }
    
    public function show(Product $product)
    {
    	return view('products.show', compact('product'));
    }
}
