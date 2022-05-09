<?php


namespace App\Services\OpenWeatherApi\Models;


class Weather
{

    public Coord $coord;
    public Main $main;

    public function __construct(object $data)
    {
        $this->coord = new Coord($data->coord);
        $this->main =  new Main($data->main);
    }



}
