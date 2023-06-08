<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index(Request $request) {
        //mengambil data
        $product = Product::all();

        //mengambil data category
        $category = Category::all();

        //mengambil data slider
        $slider = Slider::all();

        if ($request->category) {
            $products = Product::with('category')->whereHas('category', function ($query) use ($request) {
                $query->where('name', $request->category);
            })->get();
        } else if ($request->min && $request->max) {
            $products = Product::where('price', '>=', $request->min)->where('price', '<=', $request->max)->get();
        } else {
            // mengambil data
            $products = Product::all();
        }

        return view('landing', compact('product', 'category', 'slider'));
    }
}
