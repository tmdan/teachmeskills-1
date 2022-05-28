<?php

namespace App\Services\Weather\Interfaces;

use App\Services\Weather\Interfaces\Models\CloudinessInterface;
use App\Services\Weather\Interfaces\Models\CoordinationInterface;
use App\Services\Weather\Interfaces\Models\DateInterface;
use App\Services\Weather\Interfaces\Models\TemperatureInterface;

interface WeatherServiceInterface
{

    public function response(): object;

    public function coordinates(): CoordinationInterface;

    public function temperature(): TemperatureInterface;

    public function cloudiness(): CloudinessInterface ;

    public function date(): DateInterface;

}