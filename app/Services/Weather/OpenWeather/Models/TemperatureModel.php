<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\TemperatureModelContract;

class TemperatureModel implements TemperatureModelContract
{
    private $temp;
    private $feels_like;

    public function __construct(object $date)
    {
        $this->temp = $date->main->temp;
        $this->feels_like = $date->main->feels_like;
    }

    public function getTemperature(): float
    {
        return $this->temp;
    }

    public function getFeelsLikeTemperature(): float
    {
        return $this->feels_like;
    }

}
