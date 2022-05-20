<?php

namespace App\Services\Weather\Interfaces;


use App\Services\Weather\Interfaces\Models\CloudinessModelContract;
use App\Services\Weather\Interfaces\Models\CoordinateModelContract;
use App\Services\Weather\Interfaces\Models\TemperatureModelContract;

interface WeatherServiceContract
{

    public function temperature(): TemperatureModelContract;

    public function coordinates(): CoordinateModelContract;

}
