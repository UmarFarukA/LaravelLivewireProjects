<?php

use App\Livewire\Dashboard\Index as DashboardIndex;
use App\Livewire\Submissions\Index as SubmissionIndex;
use App\Livewire\Submissions\Edit as EditSubmission;
use App\Livewire\Submissions\Create as CreateSubmission;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

use App\Livewire\Login;


Route::get("/", Home::class)->name('home');
Route::get('/dashboard', DashboardIndex::class)->name("dashboard.home");

Route::get('/dashboard/submissions', SubmissionIndex::class)->name('submissions.index');
Route::get("/dashboard/submissions/{submission}/edit", EditSubmission::class)->name("submissions.edit");
Route::get("/submission", CreateSubmission::class)->name("submissions.create");

Route::get("/login", Login::class)->name('login');