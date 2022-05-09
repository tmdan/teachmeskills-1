<?php


namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Template\Models\CoordinationInterface;

class Coordinate implements CoordinationInterface
{
    public $lon;
    public $lat;

    public function __construct(object $coords)
    {
        $this->lat = $coords->lat;
        $this->lon = $coords->lon;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

    public function getLat(): float
    {
        return $this->lat;
    }
}
