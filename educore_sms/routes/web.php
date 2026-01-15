<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['guest'])->group(function () {

    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('store.register');

    Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot.password');

    Route::get('/apply', [ApplicationsController::class, 'apply'])->name('applications.apply');

    Route::post('/apply', [ApplicationsController::class, 'store'])->name('applications.store');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return match (Auth::user()->role) {
            1 => Inertia::render('Dashboards/Dashboard'),
            3 => Inertia::render('Dashboards/TeacherDashboard'),
            4 => Inertia::render('Dashboards/ParentDashboard'),
            5 => Inertia::render('Dashboards/StudentDashboard'),
        };
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    // Schools Routes
    Route::get(
        '/schools',
        [SchoolController::class, 'index']
    )->name('schools.index');
    Route::get('/schools/create', [SchoolController::class, 'create'])
        ->name('schools.create');
    Route::post('/schools/store', [SchoolController::class, 'store'])
        ->name('schools.store');
    Route::get('/schools/{school}/edit', [SchoolController::class, 'edit'])
        ->name('schools.edit');
    Route::put('/schools/{school}/update', [SchoolController::class, 'update'])
        ->name('schools.update');
    Route::delete('/schools/delete/{school}', [SchoolController::class, 'destroy'])
        ->name('schools.destroy');


    Route::get('/admissions', [AdmissionController::class, 'index'])
        ->name('admissions.index');

    Route::get('/admissions/{application}/view', [AdmissionController::class, 'view'])
        ->name('admissions.view');

    Route::put('/admissions/{application}/update', [AdmissionController::class, 'update'])
        ->name('admissions.update');

    // Route::get('/applications/{application}/manage', [ApplicationsController::class, 'manage'])
    //     ->name('applications.manage');

    // Route::get('/applications/{application}/admit', [ApplicationsController::class, 'admitForm'])
    //     ->name('applications.admit.form');

    // Route::post('/applications/{application}/admit', [ApplicationsController::class, 'admit'])
    //     ->name('applications.admit');

    // Students route
    Route::get('/students', [StudentController::class, 'index'])
        ->name('students.index');
    // Route::get('/students/create', [StudentController::class, 'create'])
    //     ->name('students.create');
    // Route::post('/students/store', [StudentController::class, 'store'])
    //     ->name('students.store');
    // Route::get('/students/{student}/edit', [StudentController::class, 'edit'])
    //     ->name('students.edit');
    // Route::put('/students/{student}/update', [StudentController::class, 'update'])
    //     ->name('students.update');
    // Route::delete('/students/delete/{student}', [StudentController::class, 'destroy'])
    //     ->name('students.destroy');

    // Users routes
    Route::get('/users', [UserController::class, 'index'])
        ->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])
        ->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])
        ->name('users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])
        ->name('users.edit');
    Route::put('/users/{user}/update', [UserController::class, 'update'])
        ->name('users.update');
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy'])
        ->name('users.destroy');

    // Settings
    Route::get('/settings', [ProfileController::class, 'index'])
        ->name('settings.index');
    Route::put('/settings/contact', [ProfileController::class, 'updateContactInfo'])
        ->name('settings.update.contact');
    Route::put('/settings/password', [ProfileController::class, 'updatePassword'])
        ->name('settings.update.password');
});
