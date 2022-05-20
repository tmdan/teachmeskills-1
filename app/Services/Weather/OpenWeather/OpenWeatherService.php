<?php

namespace App\Services\Weather\OpenWeather;

use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\Models\Cloudiness;
use App\Services\Weather\OpenWeather\Models\Coordinate;
use App\Services\Weather\OpenWeather\Models\Temperature;
use Illuminate\Support\Facades\Http;

class OpenWeatherService implements WeatherServiceContract
{
    private $responce = null;

    public function response(): object
    {
        if ($this->responce == null) {
            $this->responce = Http::get(config('services.open-weather-api.link'),
                [
                    'appid' => config('services.open-weather-api.key'),
                    'q' => config('services.open-weather-api.city'),
                    'lang' => config('services.open-weather-api.lang'),
                    'units' => config('services.open-weather-api.units'),
                ]);
        }

        return $this->responce;
    }

    public function coordinates(): Coordinate
    {
        return new Coordinate($this->response()->object());
    }

    public function temperature(): Temperature
    {
        return new Temperature($this->response()->object());
    }
}
