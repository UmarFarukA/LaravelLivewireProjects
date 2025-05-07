<?php

use App\Livewire\AboutUs;
use App\Livewire\Faqs;
use App\Livewire\Home;
use App\Livewire\Products;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\SignUp;
use App\Livewire\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/products', Products::class)->name('products');
Route::get('/about', AboutUs::class)->name('about-us');
Route::get('/faq', Faqs::class)->name('faqs');
Route::get('/contact', Contact::class)->name('contact');


// Authentication Routes
Route::get('/login', Login::class)->name('login');
Route::get('/signup', SignUp::class)->name('signup');