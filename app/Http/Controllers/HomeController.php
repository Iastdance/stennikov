<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $products = Product::all();

        $brand_name = Product::distinct()->pluck('brand');

        return view('home', compact('products', 'brand_name'));
    }

    public function brand($brand) {

        $products = Product::find($brand);

        return view('brand', compact('products'));
    }
}
