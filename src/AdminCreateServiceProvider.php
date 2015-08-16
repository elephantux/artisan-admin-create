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
        $this->commands(
            'admin:create'
        );
    }
}
