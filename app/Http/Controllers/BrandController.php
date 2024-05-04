<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index($products) {

        $product = Product::where('brand', $products)->first();

        return view('brand', compact('product'));
    }
}
