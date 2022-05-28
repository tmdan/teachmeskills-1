<?php

namespace App\Services\Weather\Interfaces\Models;

interface TemperatureInterface
{
    //  Температура
    public function getCurrentTemperature(): float|null;

    //  Ощущается как
    public function getFeelsLikeTemperature(): float|null;

    //  Влажность
    public function getHumidity(): int|null;

    //  Давление
    public function getPressure(): int|null;

    //  Скорость ветра
    public function getWindSpeed(): float|null;
}