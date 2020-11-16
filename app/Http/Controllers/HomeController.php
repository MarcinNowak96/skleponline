<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use  Illuminate\Database\Eloquent\Collection;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $products = Product::sortable()->get();
        return view('home', compact('categories', 'products'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'id_category' => 'required',
        ]);
        if ($request->hasFile('image'))
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->id_category = $request->input('id_category');
        $product->price = $request->input('price') * 100;
        $product->brutto = $product->price * 1.23;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product', $filename);
            $product->image = $filename;
        } else {
            $product->image = '';
        }
        $product->save();
        return redirect()->route('home.index', ['status' => 'edit_success']);
    }


    public function delete(Product $product)
    {
        $date = Carbon::now();
        if ($date->hour >= 11 && $date->minute >= 0 && $date->minute <= 4 && $date->englishDayOfWeek == 'Monday') {         //Niezłe byki walnąłem
            $product = Product::findOrFail($product->id);
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
