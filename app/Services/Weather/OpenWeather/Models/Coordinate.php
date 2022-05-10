<?php


namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Template\Models\CoordinationInterface;

class Coordinate implements CoordinationInterface
{
    private $lon;
    private $lat;
    private $cityName;

    public function __construct(object $coords)
    {
        $this->lat = $coords->coord->lat;
        $this->lon = $coords->coord->lon;
        $this->cityName = $coords->name;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getCityName(): string|null
    {
        return $this->cityName;
    }
}
