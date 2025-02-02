<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Dashboard\Index as DashboardIndex;
use App\Livewire\Submissions\Index as SubmissionIndex;
use App\Livewire\Submissions\Edit as EditSubmission;
use App\Livewire\Submissions\Create as CreateSubmission;
use App\Livewire\Sessions\Index as SessionIndex;
use App\Livewire\Sessions\Create as SessionCreate;
use App\Livewire\Settings\Index as SettingIndex;
use App\Livewire\Home;
use App\Livewire\KnowledgeSession;
use Illuminate\Support\Facades\Route;

use App\Livewire\Login;
use App\Livewire\Users\Index as UsersIndex;
use App\Livewire\Users\Create as CreateUser;
use App\Livewire\Users\Edit as EditUser;
use Illuminate\Support\Facades\Auth;

Route::get("/", Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/knowledge_sessions', KnowledgeSession::class)->name('knowledge_sessions');
Route::get('/contact', Contact::class)->name('contact');

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
Route::get("/submission", CreateSubmission::class)->name("submissions.create");

Route::get("/dashboard/users", UsersIndex::class)
    ->middleware('auth')
    ->name("users.index");
Route::get("/dashboard/users/create", CreateUser::class)
    ->middleware('auth')
    ->name("users.create");
Route::get("/dashboard/users/{user}/edit", EditUser::class)
    ->middleware('auth')
    ->name("user.edit");

Route::get("/dashboard/sessions", SessionIndex::class)
    ->middleware('auth')
    ->name("sessions.index");
Route::get("/dashboard/sessions/create", SessionCreate::class)
    ->middleware('auth')
    ->name("sessions.create");

Route::get("/dashboard/settings", SettingIndex::class)
    ->middleware('auth')
    ->name("settings.index");