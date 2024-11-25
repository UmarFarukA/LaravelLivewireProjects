<?php

use App\Livewire\Dashboard\Index;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

use App\Livewire\Login;

// Route::get('/dashboard', function () {
//     return view('index');
// });

Route::get('/', Index::class);
Route::get("/", Home::class);

Route::get("/login", Login::class)->name('login');
