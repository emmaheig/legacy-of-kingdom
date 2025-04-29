<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'http://localhost:5173', // EXACTEMENT le front
        "http://127.0.0.1:8000"
    ],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    // Indispensable si tu utilises "withCredentials: true"
    'supports_credentials' => true,
];
