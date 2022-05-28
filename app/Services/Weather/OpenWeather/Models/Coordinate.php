<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\CoordinationInterface;

class Coordinate implements CoordinationInterface
{

    private $lat;
    private $lon;
    private $cityName;

    public function __construct(object $coords)
    {
        $this->lon = $coords->coord->lon;
        $this->lat = $coords->coord->lat;
        $this->cityName = $coords->name;
    }

    public function getLon(): float|null
    {
        return $this->lon;
    }

    public function getLat(): float|null
    {
        return $this->lat;
    }

    public function getCityName(): string|null
    {
        return $this->cityName;
    }
}