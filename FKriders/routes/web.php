<?php

use App\Http\Controllers\ReceiptController;

use App\Livewire\AboutUs;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Contact;
use App\Livewire\Faqs;
use App\Livewire\Home;
use App\Livewire\Products;

use App\Livewire\Admin\Users\Index as UserIndex;
use App\Livewire\Admin\Users\Show as UserShow;

use App\Livewire\Admin\Tricycle\Index as TricycleIndex;
use App\Livewire\Admin\Tricycle\Create as TricycleCreate;
use App\Livewire\Admin\Tricycle\Edit as TricycleEdit;

use App\Livewire\Admin\Allocation\Index as AllocationIndex;
use App\Livewire\Admin\Payment\CustomerIndex;
use App\Livewire\Admin\Payment\Index as PaymentIndex;
use App\Livewire\Admin\Payment\InvestorIndex;
use App\Livewire\Admin\Investor\Index as InvestorsIndex;
use App\Livewire\Admin\Investor\Create as InvestorsCreate;
use App\Livewire\Admin\Report;
use App\Livewire\Admin\Statistics;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Investor;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/products', Products::class)->name('products');
Route::get('/about', AboutUs::class)->name('about-us');
Route::get('/faq', Faqs::class)->name('faqs');
Route::get('/contact', Contact::class)->name('contact');


Route::get('/dashboard', Dashboard::class)
    ->middleware('auth')
    ->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard/users', UserIndex::class)
         ->name('users.index');
    Route::get('/dashboard/users/{user}', UserShow::class)->name('users.show');
})->can("modifyOrView", "user");

Route::middleware('auth')->group(function(){
    Route::get('/dashboard/tricycles', TricycleIndex::class)->name('tricycle.index');
    Route::get('/dashboard/tricycles/create', TricycleCreate::class)->name('tricycle.create');
    Route::get('/dashboard/tricycles/{tricycle}/edit', TricycleEdit::class)->name('tricycle.edit');
})->can("modifyOrView", "user");


Route::middleware('auth')->group(function(){
    Route::get('/dashboard/allocation', AllocationIndex::class)
        ->name('allocation.index');
})->can("modifyOrView", "user");

Route::middleware("auth")->group(function(){
    Route::get('/dashboard/payments', PaymentIndex::class)
    ->name('payment.index');
})->can("modifyOrView", "user");

Route::middleware("auth")->group(function(){
    Route::get('/dashboard/investors', InvestorsIndex::class)
    ->name('investors.index');
})->can("modifyOrView", "user");

// Route::middleware("auth")->group(function(){
//     Route::get('/dashboard/investors', InvestorsCreate::class)
//     ->name('investors.create');
// })->can("modifyOrView", "user");

Route::middleware("auth")->group(function(){
    Route::get('/dashboard/mypayments', CustomerIndex::class)
    ->name('customer.payment');
})->can('customerView', "user");

Route::middleware("auth")->group(function(){
    Route::get('/dashboard/myinvestments', InvestorIndex::class)
    ->name('investor.payment');
})->can('investorView', "user");

Route::get('/dashboard/reports', Report::class)
    ->middleware('auth')
    ->name('reports');
Route::get('/dashboard/statistics', Statistics::class)
    ->middleware('auth')
    ->name('statistics');



Route::get('/receipt/download/{payment}', [ReceiptController::class, 'download'])->name('receipt.download');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', '/settings/profile');

    Route::get('/settings/profile', Profile::class)->name('settings.profile');
    Route::get('/settings/password', Password::class)->name('settings.password');
    Route::get('/settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
