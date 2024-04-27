<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth');
    Route::get('/reg', [RegisterController::class, 'index'])->name('reg');
    Route::post('/reg', [RegisterController::class, 'create'])->name('create');
});

Route::group(['middleware' => ['user']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
