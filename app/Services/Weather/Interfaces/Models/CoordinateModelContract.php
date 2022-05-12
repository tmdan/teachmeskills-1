<?php

namespace App\Services\Weather\Interfaces\Models;

interface CoordinateModelContract
{
    //Ширина
    public function getLon(): float|null;

    // Долгота
    public function getLat(): float|null;

    public function getCityName(): string|null;

}
