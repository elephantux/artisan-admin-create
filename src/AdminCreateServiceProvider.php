<?php

namespace Elephantux\AdminCreate;

use Illuminate\Support\ServiceProvider;

class AdminCreateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('admin.create', function ($app) {
            return $app['Elephantux\AdminCreate\Commands\AdminCreate'];
        });
        $this->commands('admin.create');
    }
}
