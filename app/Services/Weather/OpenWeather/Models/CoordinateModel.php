<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\CoordinateModelContract;

class CoordinateModel implements CoordinateModelContract
{
    private $lat;
    private $lon;

    public function __construct(object $data)
    {
        $this->lat = $data->coord->lat;
        $this->lon = $data->coord->lon;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getLon(): float
    {
        return $this->lon;
    }

}
