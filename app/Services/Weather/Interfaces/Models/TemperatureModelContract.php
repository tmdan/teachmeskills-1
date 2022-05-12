<?php

namespace App\Services\Weather\Interfaces\Models;

interface TemperatureModelContract
{

    public function getCurrentTemperature(): float|null;

    public function getFeelsLikeTemperature(): float|null;

    public function getMinTemperature(): float|null;

    public function getMaxTemperature(): float|null;

    //Влажность
    public function getHumidity(): int|null;

    //Давление
    public function getPressure(): int|null;

    public function getIcon(): string|null;

    public function getDescription(): string|null;

}
