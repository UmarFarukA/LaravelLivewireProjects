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

Route::get("/", Home::class)->name('home');
Route::get('/dashboard', DashboardIndex::class)->name("dashboard.home");

Route::get('/dashboard/submissions', SubmissionIndex::class)->name('submissions.index');
Route::get("/dashboard/submissions/{submission}/edit", EditSubmission::class)->name("submissions.edit");
Route::get("/submission", CreateSubmission::class)->name("submissions.create");

Route::get("/dashboard/users", UsersIndex::class)->name("users.index");
Route::get("/dashboard/users/create", CreateUser::class)->name("users.create");
Route::get("/dashboard/users/{user}/edit", EditUser::class)->name("user.edit");

Route::get("/login", Login::class)->name('login');
