<?php

namespace App\Services\Weather\Interfaces;

use App\Services\Weather\Interfaces\Models\CoordinateModelContract;
use App\Services\Weather\Interfaces\Models\GeneralnformationModelContract;
use App\Services\Weather\Interfaces\Models\PressureModelContract;
use App\Services\Weather\Interfaces\Models\TemperatureModelContract;

interface WeatherServiceContract
{
    //function getMes(): string;

    function responce(): object;

    function coordinates(): CoordinateModelContract;

    function temperatures(): TemperatureModelContract;

    function generalInformation(): GeneralnformationModelContract;

    function pressure(): PressureModelContract;
}
