<?php

return [
    'open-weather-service' => [
        'link' => env('OPEN_WEATHER_LINK' , 'https://api.openweathermap.org/data/2.5/weather'),
        'key' => env('OPEN_WEATHER_API_KEY'),
        'city' => env('OPEN_WEATHER_API_CITY'),
        'lang' => env('OPEN_WEATHER_API_LANG'),
        'units' => env('OPEN_WEATHER_API_UNITS'),
    ],
];
