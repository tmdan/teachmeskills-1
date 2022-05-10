<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'open-weather-api' => [
        "link" => env("OPEN_WEATHER_LINK", "https://api.openweathermap.org/data/2.5/weather"),
        "key" => env("OPEN_WEATHER_API_KEY", "5cc014b5ee90117eb3ad4f8c758455c4"),
        'city' => env('OPEN_WEATHER_API_CITY', "Minsk"),
        "lang" => env("OPEN_WEATHER_API_LANG", "ru"),
        "units" => env("OPEN_WEATHER_API_UNITS", "metric"),
    ]
];
