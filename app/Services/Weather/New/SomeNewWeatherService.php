<?php

namespace App\Services\Weather\New;

use App\Services\Weather\New\Models\Coordinate;
use App\Services\Weather\New\Models\Temperature;
use App\Services\Weather\Template\WeatherServiceInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class SomeNewWeatherService implements WeatherServiceInterface
{
    public function connect() : Response
    {
        return Http::get(config('services.open-weather-api.link'),[
            'appid' => config('services.open-weather-api.key'),
            'q' => config('services.open-weather-api.city'),
            'lang' => config('services.open-weather-api.lang'),
            'units' => config('services.open-weather-api.units'),
        ]);
    }



    function coordinates(): Coordinate
    {
       return  new Coordinate($this->connect()->object()->coord);
    }

    function temperature(): Temperature
    {
        return  new Temperature($this->connect()->object()->main);
    }
}