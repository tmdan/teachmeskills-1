<?php

namespace App\Services\Weather\Interfaces\Models;

interface TemperatureModelContract
{
    function getTemperature(): float|null;

    function getFeelsLikeTemperature(): float|null;
}
