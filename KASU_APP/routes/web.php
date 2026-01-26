<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/', [HomeController::class, 'home'])
        ->name('home');
    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');
    Route::get('/register', [AuthController::class, 'register'])
        ->name('register');
});
