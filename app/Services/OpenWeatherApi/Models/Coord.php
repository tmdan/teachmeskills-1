<?php


namespace App\Services\OpenWeatherApi\Models;


class Coord
{
    public $lon;
    public $lat;

    public function __construct(object $coords)
    {
        $this->lat = $coords->lat;
        $this->lon = $coords->lon;
    }

    public function getLon()
    {
        return $this->lon;
    }

    public function getLat()
    {
        return $this->lat;
    }
}
