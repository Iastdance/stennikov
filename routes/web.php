<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoneController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [HomeController::class, 'index' ])->name('home');
//Route::get('/catalog/{brand}', [HomeController::class, 'brand' ])->name('brand');
Route::get('/brand/{brand}', [BrandController::class, 'index' ])->name('brand');
Route::get('/stonik', [StoneController::class, 'show' ])->name('stonik');
Route::get('/catalog', [CatalogController::class, 'index' ])->name('catalog');

require_once __DIR__ . '/auth.php';
