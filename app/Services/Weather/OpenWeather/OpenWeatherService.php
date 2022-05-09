<?php

namespace App\Services\Weather\OpenWeather;

use App\Services\Weather\OpenWeather\Models\Coordinate;
use App\Services\Weather\OpenWeather\Models\Temperature;
use App\Services\Weather\Template\WeatherServiceInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class OpenWeatherService implements WeatherServiceInterface
{
    /**
     * Метод, который обращается к внешним ресурсам для получения данных
     * @return Response
     */
    public function connect(): Response
    {
        return Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'appid' => config('services.open-weather-api.key'),
            'q' => config('services.open-weather-api.city'),
            'lang' => config('services.open-weather-api.lang'),
            'units' => config('services.open-weather-api.units'),
        ]);
    }

    /**
     * Дополнительный метод который регулируют сборку данных относительно объектов - можно было бы обойтись и без него
     * @param $element
     * @return Coordinate|Temperature
     */
    private function prepareData($element): Coordinate|Temperature
    {
        return match ($element) {
            'coordinates' => new Coordinate($this->connect()->object()->coord),
            'temperature' => new Temperature($this->connect()->object()->main),

            /*........
            'something' => new Something($this->connect()->object()->something),
            */
        };
    }

    /**
     * Метод, который возвращает регламентированный формат данных координат
     * @return Coordinate
     */
    function coordinates(): Coordinate
    {
        return $this->prepareData('coordinates');
    }

    /**
     * Метод, который возвращает регламентированный формат данных температуры
     * @return Temperature
     */
    function temperature(): Temperature
    {
        return $this->prepareData('temperature');
    }
}