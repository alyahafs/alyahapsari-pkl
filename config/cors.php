<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Laravel CORS Options
     |--------------------------------------------------------------------------
     |
     | You may configure your settings here to control cross-origin resource
     | sharing (CORS). By default, all routes will be open to all origins,
     | but you may configure this behavior to your application's needs.
     |
     */

    'paths' => ['api/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'],  // Bisa sesuaikan jika hanya ingin mengizinkan domain tertentu
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
