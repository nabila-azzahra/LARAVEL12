<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\ReservationController;

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

Route::get('/admin', [StadiumController::class, 'index'])->name('admin');

Route::prefix('admin')->group(function () {
    Route::resource('stadiums', StadiumController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('fitur', FiturController::class);
});
