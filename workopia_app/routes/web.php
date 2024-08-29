<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobListingController::class, 'index'])->name('home');
Route::get("/jobs", [JobListingController::class, 'jobs'])->name('jobs');
Route::get("/jobs/create", [JobListingController::class, 'create'])->name('create')->middleware('auth');
Route::post("/jobs", [JobListingController::class, 'store'])->middleware('auth');
Route::get("/jobs/{job}", [JobListingController::class, 'show'])->name('show');
Route::get('/jobs/edit/{job}', [JobListingController::class, 'edit'])->name('edit')->middleware('can:modify,job');
Route::patch("/jobs", [JobListingController::class, 'update'])->name('update')->middleware('can:modify,job');
Route::delete("/jobs/{job}", [JobListingController::class, 'destroy'])->middleware('can:modify,job');


// Auth routes
Route::get("/login", [AuthController::class, 'create'])->name("login");
Route::post("/login", [AuthController::class, 'store']);
Route::delete("/logout", [AuthController::class, 'destroy'])->middleware('auth');


// Register routes
Route::get("/register", [RegisterController::class, 'create'])->name('register');
Route::post("/register", [RegisterController::class, 'store']);
