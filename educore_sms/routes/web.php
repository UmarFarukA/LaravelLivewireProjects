<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['guest'])->group(function(){

    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('store.register');

    Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot.password');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
            return Inertia::render('Dashboards/Dashboard');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    // Schools Routes
    Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');
    Route::get('/schools/create', [SchoolController::class, 'create'])->name('schools.create');
    Route::post('/schools/store', [SchoolController::class, 'store'])->name('schools.store');
});




// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return match(auth()->user()->role) {
//             'admin' => Inertia::render('Dashboard'),
//             'teacher' => Inertia::render('Teacher/Dashboard'),
//             'student' => Inertia::render('Student/Dashboard'),
//         };
//     });
// });
