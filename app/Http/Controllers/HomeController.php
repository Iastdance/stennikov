<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $products = Product::all();

        return view('home', compact('products'));
    }

    public function brand($brand) {

        $products = Product::where('brand', $brand)->groupBy('brand')->get();

        return view('brand', compact('products'));
    }
}
