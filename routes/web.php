<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Make sure to import Auth facade

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// About route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Stock route
Route::get('/stock', [StockController::class, 'index'])->name('stock');

// Signup routes
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/store-signup', [AuthController::class, 'storeSignup'])->name('storeSignup');

// Signin routes
Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/store-signin', [AuthController::class, 'storeSignin'])->name('storeSignin');

// Post resource routes
Route::resource('posts', PostController::class);

// Logout route with middleware
Route::get('logout', function () {
    Auth::logout();  // Add semicolon here
    return redirect()->to('/')->with('success', 'Berhasil Logout!');  // Use '->' before with()
})->name('logout')->middleware('auth');

Route::resource('categories', CategoryController::class);