<?php

namespace App\Services\Weather\OpenWeather;

use App\Services\Weather\Interfaces\Models\CoordinateModelContract;
use App\Services\Weather\Interfaces\Models\TemperatureModelContract;
use App\Services\Weather\Interfaces\Models\TimeModelContract;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\Models\Coordinate;
use App\Services\Weather\OpenWeather\Models\Temperature;
use App\Services\Weather\OpenWeather\Models\Time;
use Illuminate\Support\Facades\Http;

class OpenWeatherService implements WeatherServiceContract
{
    private $response = null;

    function response(): object
    {
        if ($this->response == null) {
            $this->response = Http::get(config('services.open-weather-api.link'), [
                'appid' => config('services.open-weather-api.key'),
                'q' => config('services.open-weather-api.city'),
                'lang' => config('services.open-weather-api.lang'),
                'units' => config('services.open-weather-api.units'),
            ]);
        }
        return $this->response;
    }

    function coordinates(): CoordinateModelContract
    {
        return new Coordinate($this->response()->object());
    }

    function temperature(): TemperatureModelContract
    {
        return new Temperature($this->response()->object());
    }

    function time(): TimeModelContract
    {
        return new Time($this->response()->object());
    }
}
