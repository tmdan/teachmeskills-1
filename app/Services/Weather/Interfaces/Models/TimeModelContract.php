<?php

namespace App\Services\Weather\Interfaces\Models;

interface TimeModelContract
{

    public function getSunriseTime();

    public function getSunsetTime();
}
