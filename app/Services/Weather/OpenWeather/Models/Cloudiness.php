<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\CloudinessInterface;

class Cloudiness implements CloudinessInterface
{
    private $icon;
    private $description;

    public function __construct(object $data)
    {
//        dd($data);
        $this->icon = $data->weather[0]->icon;
        $this->description = $data->weather[0]->description;
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