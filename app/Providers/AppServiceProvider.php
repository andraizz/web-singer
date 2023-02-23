<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     Blade::directive('currency', function ($expression)
    //     { 
    //         return "Rp. ". number_format($expression,0,',','.');
    //     });
    // }

    public function boot()
    {
        Str::macro('currency', function ($expression)
        {
            return "Rp. ". number_format($expression, 0,',','.');
        });
    }
}
