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
            __DIR__ . '/../public' => public_path('vendor/helloworld'),
        ], 'helloworld-assets');

        // Publish config to packages directory
        $this->publishes([
            __DIR__.'/../config' => base_path('packages/Example/HelloWorld/config'),
        ], 'helloworld-config');
    }
}
