<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class fbServiceProvider extends ServiceProvider
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
        $this->app->singleton(FB::class, function ($app) {
            return new fb(config('fb'));
        });
    }
}
