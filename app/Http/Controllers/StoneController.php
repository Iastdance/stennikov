<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StoneController extends Controller
{
    public function index() {
        return view('stonik');
    }

    public function show() {

        $brand = Product::all();

        return view('stonik', compact('brand'));
    }
}
