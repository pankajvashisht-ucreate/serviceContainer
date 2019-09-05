<?php

namespace App\Providers;

use App\Services\FBService;
use Illuminate\Support\ServiceProvider;

class FacebookContainer extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('FB', function () {
            return new FBService('ABC');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
