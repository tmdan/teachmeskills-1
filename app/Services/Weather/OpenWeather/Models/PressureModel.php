<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\PressureModelContract;

class PressureModel implements PressureModelContract
{
    private $pressure;
    private $humidity;

    public function __construct($date)
    {
        $this->pressure = $date->main->pressure;
        $this->humidity = $date->main->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

}
