<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboards/Dashboard');
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
