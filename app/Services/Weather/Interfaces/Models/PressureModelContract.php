<?php

namespace App\Services\Weather\Interfaces\Models;

interface PressureModelContract
{
    function getPressure(): float|null;

    function getHumidity(): float|null;
}
