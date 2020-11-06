<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Product::all()->sortBy('name');
        return view('home', compact('categories', 'products'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request, Product $product)
    {

        $request->validate([
            'name'   => 'required',
            'description'    => 'required',
            'price'    => 'required',
        ]);
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->id_category = $request->input('id_category');
        $product->price = $request->input('price') * 100;
        $product->brutto = $product->price * 1.23;
        $product->save();
        return redirect()->route('home.index', ['status' => 'edit_success']);
    }

    public function delete(Product $product)
    {
        $date = Carbon::now();
        $date->toArray();
        if ($date->hour > 12 && $date->hour < 13 && $date->minute > 0 && $date->minute < 4 && $date->englishDayOfWeek = "Monday" ) {
            $product = Product::all()->find($product->id);
            try {
                $product->delete();
                return redirect()->route('home.index');
            } catch (\Exception $e) {

            }
        } else {
            Log::warning('Próba usunięcia produktu, o złej godzinie lub w zły dzień');
            return redirect()->route('home.index');
        }
    }
}
