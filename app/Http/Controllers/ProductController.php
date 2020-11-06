<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $categories = Categories::all();
        $product = Product::find($product->id);
        if ($product){
            return view('product', compact('product','categories'));
        }
    }
}
