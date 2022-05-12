<?php

namespace App\Facade;

use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Support\Facades\Facade;


class Weather extends Facade
{
    protected static function getFacadeAccessor()
    {
        return OpenWeatherService::class;
    }

}
