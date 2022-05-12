<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\TemperatureModelContract;

class Temperature implements TemperatureModelContract
{
    private $temp;
    private $temp_min;
    private $temp_max;
    private $feels_like;
    private $humidity;
    private $icon;
    private $description;
    private $pressure;


    public function __construct(object $data)
    {
        $this->temp = $data->main->temp;
        $this->temp_min = $data->main->temp_min;
        $this->temp_max = $data->main->temp_max;
        $this->feels_like = $data->main->feels_like;
        $this->humidity =$data->main->humidity;
        $this->icon = $data->weather[0]->icon;
        $this->description = $data->weather[0]->description;
        $this->pressure = $data->main->pressure;
    }

    public function getCurrentTemperature(): float|null
    {
        return $this->temp;
    }

    public function getFeelsLikeTemperature(): float|null
    {
        return $this->feels_like;
    }

    public function getMinTemperature(): float|null
    {
        return $this->temp_min;
    }

    public function getMaxTemperature(): float|null
    {
        return $this->temp_max;
    }

    public function getHumidity(): int|null
    {
        return $this->humidity;
    }

    public function getIcon(): string|null
    {
        return "/OpenWeatherIcons/$this->icon.png";
        //return $this->icon;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function getPressure(): int|null
    {
        return $this->pressure;
    }
}
