<?php

use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\Forum;
use App\Livewire\Home;
use App\Livewire\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('login');
Route::get('/news', News::class)->name('news');
Route::get('/forum', Forum::class)->name('forum');
Route::get('/contact', Contact::class)->name('contact');


Route::get('/dashboard', Dashboard::class)
    ->middleware('auth')
    ->name('dashboard.index');

Route::get("/logout", function () {
    Auth::logout();
    return redirect()->route("home");
})->name("logout");
