<?php

namespace Example\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helloworld');

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Publish assets
        $this->publishes([
            __DIR__.'/../resources/js' => public_path('vendor/helloworld/js'),
            __DIR__.'/../resources/css' => public_path('vendor/helloworld/css'),
        ], 'helloworld-assets');

        // Publish config
        $this->publishes([
            __DIR__.'/../config/pages.php' => config_path('helloworld.php'),
        ], 'helloworld-config');
    }
}
