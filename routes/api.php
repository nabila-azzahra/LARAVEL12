<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FiturController;

Route::get('fitur', [FiturController::class, 'index']);
Route::get('fitur/{fitur}', [FiturController::class, 'show']);
Route::post('fitur', [FiturController::class, 'store']);
Route::put('fitur/{fitur}', [FiturController::class, 'update']);
Route::delete('fitur/{fitur}', [FiturController::class, 'destroy']);
