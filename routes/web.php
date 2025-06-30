<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('home'); // or any other view you want as dashboard
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/about', function () {
    return view('about');
});


require __DIR__.'/auth.php';
