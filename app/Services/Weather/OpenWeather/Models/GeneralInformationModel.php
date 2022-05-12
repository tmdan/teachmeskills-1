<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\GeneralnformationModelContract;

class GeneralInformationModel implements GeneralnformationModelContract
{
    private $city;
    private $icon;
    private $description;

    public function __construct(object $date)
    {
        $this->city = $date->name;
        $this->icon = $date->weather[0]->icon;
        $this->description = $date->weather[0]->description;
    }

    public function getNameCity(): string
    {
        return $this->city;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
