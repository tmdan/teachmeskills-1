<?php


namespace App\Services\Weather\New\Models;

use App\Services\Weather\Template\Models\CoordinationInterface;

class Coordinate implements CoordinationInterface
{
    private $lon;
    private $lat;

    public function __construct(object $coords)
    {
        $this->lat = $coords->lat;
        $this->lon = $coords->lon;
    }

    public function getLon(): float
    {
        return 0;
    }

    public function getLat(): float
    {
        return 0;
    }
}
