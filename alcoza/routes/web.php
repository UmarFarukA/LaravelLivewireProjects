<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GetInvolveController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/alumin', [AlumniController::class,'index'])->name('alumni');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/events', [EventsController::class,'index'])->name('events');
Route::get('/get-involve', [GetInvolveController::class,'index'])->name('get-involve');
