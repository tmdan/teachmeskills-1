<?php

namespace App\Services\Weather\Template;

use App\Services\Weather\Template\Models\CoordinationInterface;
use App\Services\Weather\Template\Models\TemperatureInterface;
use Illuminate\Http\Client\Response;

interface WeatherServiceInterface
{
    function connect(): Response;

    function coordinates(): CoordinationInterface;

    function temperature(): TemperatureInterface;
}