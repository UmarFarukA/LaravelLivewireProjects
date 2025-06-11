<?php

use App\Livewire\ArticleIndex;
use App\Livewire\CreateArticle;
use App\Livewire\EditArticle;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('index');
Route::get('/login', Login::class)->name('login');
Route::get('/logout', function(){
    Auth::logout();
    return redirect(route('index'));
})->name('logout');

Route::middleware('auth')->group(function(){

    Route::get('/articles', ArticleIndex::class)->name('article-index');
    Route::get('/articles/create', CreateArticle::class)->name('create-article');
    Route::get('/articles/{article}/edit', EditArticle::class)->name('edit-article');
    Route::get('/articles/{article}', ShowArticle::class)->name('show-article');

});
