<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\CoordinateModelContract;

class Coordinate implements CoordinateModelContract
{
    private $lon;
    private $lat;
    private $cityName;

    public function __construct(object $data)
    {
        $this->lat = $data->coord->lat;
        $this->lon = $data->coord->lon;
        $this->cityName = $data->name;
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
