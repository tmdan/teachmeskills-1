<?php

namespace App\Facade;

use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Support\Facades\Facade;

class WeatherFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return OpenWeatherService::class;
    }

}
