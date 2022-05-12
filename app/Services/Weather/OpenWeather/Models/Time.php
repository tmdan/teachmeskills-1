<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\TimeModelContract;

class Time implements TimeModelContract
{
    private $sunrise;
    private $sunset;

    public function __construct(object $data)
    {
        $this->sunrise = $data->sys->sunrise;
        $this->sunset = $data->sys->sunset;
    }

    public function getSunriseTime()
    {
        return date("G:i", $this->sunrise);
    }

    public function getSunsetTime()
    {
        return date('G:i', $this->sunset);
    }
}
