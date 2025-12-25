<?php

use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Index', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Schools route
Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/schools', [SchoolController::class, 'index'])
            ->name('schools.index');
    Route::get('/schools/create', [SchoolController::class, 'create'])
            ->name('schools.create');
});

require __DIR__.'/settings.php';
