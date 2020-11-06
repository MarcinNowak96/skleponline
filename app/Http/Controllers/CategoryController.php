<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Categories $category)
    {
        $products = Product::all()->where('id_category', '=', $category->id);
        $categories = Categories::all();
        $category = Categories::findOrFail($category->id);
        if ($category) {
            return view('category', compact('category', 'categories', 'products'));
        }

    }

}
