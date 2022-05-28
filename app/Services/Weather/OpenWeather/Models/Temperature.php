<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\TemperatureInterface;

class Temperature implements TemperatureInterface
{

    private float $temp;

    private float $feelingsTemp;

    private int $humidity;

    private int $pressure;

    private float $windSpeed;

    public function __construct(object $data)
    {
        $this->temp = $data->main->temp;
        $this->feelingsTemp = $data->main->feels_like;
        $this->humidity = $data->main->humidity;
        $this->pressure = $data->main->pressure;
        $this->windSpeed = $data->wind->speed;
    }

    public function getCurrentTemperature(): float
    {
        return $this->temp;
    }

    public function getFeelsLikeTemperature(): float
    {
        return $this->feelingsTemp;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }

    public function getPressure(): int
    {
        return $this->pressure;
    }


    public function getWindSpeed(): float|null
    {
        return $this->windSpeed;
    }
}