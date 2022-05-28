<?php

namespace App\Services\Weather\OpenWeather;

use App\Services\Weather\Interfaces\Models\CoordinationInterface;
use App\Services\Weather\Interfaces\Models\DateInterface;
use App\Services\Weather\Interfaces\Models\TemperatureInterface;
use App\Services\Weather\Interfaces\WeatherServiceInterface;
use App\Services\Weather\OpenWeather\Models\Cloudiness;
use App\Services\Weather\OpenWeather\Models\Date;
use App\Services\Weather\OpenWeather\Models\Temperature;
use App\Services\Weather\OpenWeather\Models\Coordinate;
use Illuminate\Support\Facades\Http;

class OpenWeatherService implements WeatherServiceInterface
{

    public function response(): object
    {
        return Http::get(config('services.open-weather-api.link'), [
            'appid' => config('services.open-weather-api.key'),
            'q' => config('services.open-weather-api.city'),
            'lang' => config('services.open-weather-api.lang'),
            'units' => config('services.open-weather-api.units'),
        ]);    }

    public function coordinates(): CoordinationInterface
    {
        return new Coordinate($this->response()->object());
    }

    public function temperature(): TemperatureInterface
    {
        return new Temperature($this->response()->object());
    }

    public function cloudiness(): Cloudiness
    {
        return new Cloudiness($this->response()->object());
    }

    public function date(): DateInterface
    {
        return new Date($this->response()->object());
    }
}