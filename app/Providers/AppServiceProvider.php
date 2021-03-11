<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nuwave\Lighthouse\LighthouseServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(LighthouseServiceProvider::class);
    }
}
