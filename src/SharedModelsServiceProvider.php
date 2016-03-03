<?php

namespace Globant\SharedModels;

use Illuminate\Support\ServiceProvider;

class SharedModelsServiceProvider extends ServiceProvider
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
        include __DIR__.'/routes.php';
        $this->app->make('Globant\SharedModels\SharedModelsController');
    }
}
