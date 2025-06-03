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

        // Load public config
        $this->mergeConfigFrom(__DIR__.'/../config/publisher.php', 'example.helloworld');

        // Publish files from config
        $publishes = config('example.helloworld.publishes', []);
        foreach ($publishes as $tag => $paths) {
            $this->publishes($paths, $tag);
        }
    }
}
