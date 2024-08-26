<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobListingController::class, 'index'])->name('home');
Route::get("/jobs/create", [JobListingController::class, 'create'])->name('create');
Route::post("/jobs", [JobListingController::class, 'store']);
Route::get("/jobs/{job}", [JobListingController::class, 'show'])->name('show');
Route::get('/jobs/edit/{job}', [JobListingController::class, 'edit'])->name('edit');
Route::patch("/jobs", [JobListingController::class, 'update'])->name('update');


// Auth routes
Route::get("/login", [AuthController::class, 'create'])->name("login");
Route::post("/login", [AuthController::class, 'store']);


// Register routes
Route::get("/register", [RegisterController::class, 'create'])->name('register');
Route::post("/register", [RegisterController::class, 'store']);
