<?php

use App\Livewire\Dashboard\Index as DashboardIndex;
use App\Livewire\Submissions\Index as SubmissionIndex;
use App\Livewire\Submissions\Edit as EditSubmission;
use App\Livewire\Submissions\Create as CreateSubmission;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

use App\Livewire\Login;
use App\Livewire\Users\Index as UsersIndex;
use App\Livewire\Users\Create as CreateUser;
use App\Livewire\Users\Edit as EditUser;
use Illuminate\Support\Facades\Auth;

Route::get("/", Home::class)->name('home');
Route::get("/login", Login::class)->name('login');
Route::get("/logout", function () {
    Auth::logout();
    return redirect()->route("home");
})->name("logout");

Route::get('/dashboard', DashboardIndex::class)
    ->middleware('auth')
    ->name("dashboard.home");

Route::get('/dashboard/submissions', SubmissionIndex::class)
    ->middleware('auth')
    ->name('submissions.index');
Route::get("/dashboard/submissions/{submission}/edit", EditSubmission::class)
    ->middleware('auth')
    ->name("submissions.edit");
Route::get("/submission", CreateSubmission::class)
    ->middleware('auth')
    ->name("submissions.create");

Route::get("/dashboard/users", UsersIndex::class)
    ->middleware('auth')
    ->name("users.index");
Route::get("/dashboard/users/create", CreateUser::class)
    ->middleware('auth')
    ->name("users.create");
Route::get("/dashboard/users/{user}/edit", EditUser::class)
    ->middleware('auth')
    ->name("user.edit");
