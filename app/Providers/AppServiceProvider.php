<?php

namespace App\Providers;

use App\StudentFee;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //Student Due FeeController
        StudentFee::saving(function ($instance) {
            $instance->due != null ? $instance->due = $instance->fee_paid : '';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
