<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        //
        Validator::extend('max_words', function ($attribute, $value, $parameters, $validator) {
            $maxWords = $parameters[0] ?? 250; // Default to 250 words if not specified
            $wordCount = str_word_count(strip_tags($value)); // Count words, ignoring HTML tags
            return $wordCount <= $maxWords;
        });

        Validator::replacer('max_words', function ($message, $attribute, $rule, $parameters) {
            $maxWords = $parameters[0] ?? 250;
            return str_replace(':max', $maxWords, $message);
        });
    }
}