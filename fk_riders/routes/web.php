<?php

use App\Livewire\AboutUs;
use App\Livewire\Faqs;
use App\Livewire\Home;
use App\Livewire\Products;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\SignUp;
use App\Livewire\Contact;
use App\Livewire\CustomerDashboard;
use App\Livewire\Customer\Orders;
use App\Livewire\Customer\Payments as CustomerPayment;
use App\Livewire\Customer\Profile;
use App\Livewire\Customer\Products as CustomerProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/products', Products::class)->name('products');
Route::get('/about', AboutUs::class)->name('about-us');
Route::get('/faq', Faqs::class)->name('faqs');
Route::get('/contact', Contact::class)->name('contact');


// Authentication Routes
Route::get('/login', Login::class)->name('login');
Route::get('/signup', SignUp::class)->name('signup');

// Dashboard
Route::get('/dashboard', CustomerDashboard::class)
        ->name('customer_dashboard');
Route::get('/profile', Profile::class)
        ->name('customer_profile');
Route::get('/dashboard/orders', Orders::class)
        ->name('customer_orders');
Route::get('/dashboard/payments', CustomerPayment::class)
        ->name('customer_payments');
Route::get('/dashboard/products', CustomerProduct::class)
        ->name('customer_products');