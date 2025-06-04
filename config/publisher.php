<?php

return [
    'publishes' => [
        'helloworld-assets' => [
            __DIR__ . '/../public' => public_path('vendor/helloworld'),
        ],
        'helloworld-config' => [
            __DIR__ . '/../config' => base_path('packages/Example/HelloWorld/config'),
        ],
    ],
]; 
