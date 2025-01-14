<?php

use App\Livewire\About;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get("/", Home::class)->name("index");
Route::get("/about", About::class)->name("about");