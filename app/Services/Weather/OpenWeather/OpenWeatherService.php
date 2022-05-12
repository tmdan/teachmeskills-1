<?php

namespace App\Services\Weather\OpenWeather;

use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\Models\CoordinateModel;
use App\Services\Weather\OpenWeather\Models\GeneralInformationModel;
use App\Services\Weather\OpenWeather\Models\PressureModel;
use App\Services\Weather\OpenWeather\Models\TemperatureModel;
use Illuminate\Support\Facades\Http;

class OpenWeatherService implements WeatherServiceContract
{
    private $responce = null;

    /*public function getMes(): string
    {
        return 'Успешно зашли в OpenWeatherService';
    }*/

    public function responce(): object
    {
        if ($this->responce == null) {
            $this->responce = Http::get(config('weather.open-weather-service.link'),
                [
                    'q' => config('weather.open-weather-service.city'),
                    'appid' => config('weather.open-weather-service.key'),
                    'lang' => config('weather.open-weather-service.lang'),
                    'units' => config('weather.open-weather-service.units'),
                ]
            );
        }


        return $this->responce;
    }

    public function coordinates(): CoordinateModel
    {
        return new CoordinateModel($this->responce()->object());
    }

    public function temperatures(): TemperatureModel
    {
        return new TemperatureModel($this->responce()->object());
    }

    public function generalInformation(): GeneralInformationModel
    {
        return new GeneralInformationModel($this->responce()->object());
    }

    public function pressure(): PressureModel
    {
        return new PressureModel($this->responce()->object());
    }
}
