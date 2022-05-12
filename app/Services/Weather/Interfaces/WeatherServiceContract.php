<?php

namespace App\Services\Weather\Interfaces;

use App\Services\Weather\Interfaces\Models\CoordinateModelContract;
use App\Services\Weather\Interfaces\Models\TemperatureModelContract;
use App\Services\Weather\Interfaces\Models\TimeModelContract;

interface WeatherServiceContract
{

    function response(): object;

    function coordinates(): CoordinateModelContract;

    function temperature(): TemperatureModelContract;

    function time(): TimeModelContract;
}

