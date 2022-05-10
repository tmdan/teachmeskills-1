<?php

namespace App\Services\Weather\OpenWeather;

use App\Services\Weather\OpenWeather\Models\Coordinate;
use App\Services\Weather\OpenWeather\Models\Temperature;
use App\Services\Weather\Template\WeatherServiceInterface;
use Illuminate\Support\Facades\Http;

class OpenWeatherService implements WeatherServiceInterface
{
    /**
     * Метод, который обращается к внешним ресурсам для получения данных
     * @return array|object
     */
    public function response(): object
    {
        return Http::get(config('services.open-weather-api.link'), [
            'appid' => config('services.open-weather-api.key'),
            'q' => config('services.open-weather-api.city'),
            'lang' => config('services.open-weather-api.lang'),
            'units' => config('services.open-weather-api.units'),
        ]);
    }

    /**
     * Метод, который возвращает регламентированный формат данных местоположения
     * @return Coordinate
     */
    function coordinates(): Coordinate
    {
        return new Coordinate($this->response()->object());
    }

    /**
     * Метод, который возвращает регламентированный формат данных температуры
     * @return Temperature
     */
    function temperature(): Temperature
    {
        return new Temperature($this->response()->object());
    }
}