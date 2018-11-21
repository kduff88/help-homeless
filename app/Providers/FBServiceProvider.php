<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services;

class FBServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FbService::class, function ($app) {
            return new FbService(config('fb'));
        });
    }
}
