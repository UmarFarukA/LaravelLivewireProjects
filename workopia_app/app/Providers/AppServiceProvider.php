<?php

namespace App\Providers;

use App\Models\Employer;
use App\Models\User;
use App\Models\JobListing;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        JobListing::preventLazyLoading();

        Gate::define("modify-job", function (Employer $employer, JobListing $jobListing) {
            return $employer->users->id === $jobListing->employer_id;
        });
    }
}
