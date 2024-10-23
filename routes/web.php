<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('dashboard');
});

// Route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

// Autentikasi routes
Auth::routes();

// Route untuk home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
