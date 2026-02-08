<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LoginApplicantController;
use App\Http\Controllers\Auth\RegisterApplicantController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('guest')->group(function(){
    Route::get('/', [HomeController::class, 'home'])
        ->name('home');
    Route::get('/login', [LoginApplicantController::class, 'create'])
        ->name('login');
    Route::post('/login', [LoginApplicantController::class, 'authenticate'])
        ->name('applicant.authenticate');
    Route::get('/register', [RegisterApplicantController::class, 'create'])
        ->name('applicant.register');
    Route::post('/register', [RegisterApplicantController::class, 'store'])
        ->name('applicant.store');

    Route::get('/staff', [AuthController::class, 'create'])
        ->name('staff.login');
    Route::post('/staff', [AuthController::class, 'authenticate'])
        ->name('staff.authenticate');
});


//Email Verification
Route::get('/email/verify', [EmailVerificationController::class, 'notice'])
    ->middleware('auth:applicant')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
    ->middleware(['auth:applicant', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationController::class, 'resend'])
    ->middleware(['auth:applicant', 'throttle:6,1'])->name('verification.send');



// Applicants Route
Route::middleware(['auth:applicant', 'verified'])->group(function() {
    Route::get('/dashboard', [ApplicantController::class, 'dashboard'])
        ->name('applicant.dashboard');

    Route::post('/logout', [ApplicantController::class, 'logout'])
        ->name('applicant.logout');
});
