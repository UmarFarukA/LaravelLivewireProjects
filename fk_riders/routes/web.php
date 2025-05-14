<?php

use App\Livewire\AboutUs;
use App\Livewire\Admin\AddProduct;
use App\Livewire\Admin\EditProduct;
use App\Livewire\Admin\ManageUsers;
use App\Livewire\Admin\Settings;
use App\Livewire\Admin\VerifyPayment;
use App\Livewire\AdminComponent;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/products', Products::class)->name('products');
Route::get('/about', AboutUs::class)->name('about-us');
Route::get('/faq', Faqs::class)->name('faqs');
Route::get('/contact', Contact::class)->name('contact');


// Authentication Routes
Route::get('/login', Login::class)->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');
Route::get('/signup', SignUp::class)->name('signup');

// Customer Dashboard
Route::get('/dashboard', CustomerDashboard::class)
    ->middleware(['auth'])
    ->name('customer_dashboard');
Route::get('/profile', Profile::class)
    ->middleware(['auth'])
    ->name('customer_profile');
Route::get('/dashboard/orders', Orders::class)
    ->middleware(['auth'])
    ->name('customer_orders');
Route::get('/dashboard/payments', CustomerPayment::class)
    ->middleware(['auth'])
    ->name('customer_payments');
Route::get('/dashboard/products', CustomerProduct::class)
    ->middleware(['auth'])
    ->name('customer_products');

// Admin Dashboard
Route::get('/admin/dashboard', AdminComponent::class)->name('admin_home');
Route::get('/admin/dashboard/users', ManageUsers::class)->name('admin_users');
Route::get('/admin/dashboard/add-product', AddProduct::class)->name('admin_addProduct');
Route::get('/admin/dashboard/view-products', EditProduct::class)->name('admin_editProduct');
ROute::get('/admin/dashboard/verify-payment', VerifyPayment::class)->name('admin_verifyPayment');
Route::get('/admin/dashboard/settings', Settings::class)->name('admin_settings');
Route::get('/admin/dashboard/logout', function(){
    return Auth::logout();
})->name('admin_logout');
