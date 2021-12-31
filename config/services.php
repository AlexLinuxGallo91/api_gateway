<?php

return [
    'itoc_email_api' => [
        'base_uri' => env('EMAIL_ITOC_SERVICE_BASE_URL'),
        'secret' => env('EMAIL_ITOC_SERVICE_SECRET'),
    ],
    'api_services' => [
        'base_uri' => env('API_SERVICES_ITOC_BASE_URL'),
        'secret' => env('API_SERVICES_ITOC_SERVICE_SECRET'),
    ],
    'api_itoc_email' => [
        'base_uri' => env('API_ITOC_EMAIL_BASE_URL'),
        'secret' => env('API_ITOC_EMAIL_SERVICE_SECRET'),
    ],
    'secret_api' => [
        'base_uri' => env('SECRET_API_SERVICE_BASE_URL'),
        'secret' => env('SECRET_API_SECRET'),
    ],
];
