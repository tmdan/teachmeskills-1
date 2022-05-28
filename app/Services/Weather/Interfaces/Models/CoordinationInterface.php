<?php

namespace App\Services\Weather\Interfaces\Models;

interface CoordinationInterface
{
    //  Ширина
    public function getLon(): float|null;

    //  Долгота
    public function getLat(): float|null;

    //  Город
    public function getCityName(): string|null;
}