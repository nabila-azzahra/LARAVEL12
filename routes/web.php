<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiturController;

Route::resource('fitur', FiturController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/fitur', function () {
    return view('fitur');
});
