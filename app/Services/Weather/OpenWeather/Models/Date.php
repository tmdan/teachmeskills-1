<?php

namespace App\Services\Weather\OpenWeather\Models;

use App\Services\Weather\Interfaces\Models\DateInterface;

class Date implements DateInterface
{
    private $date;

    public function __construct(object $data)
    {
        $this->date = $data->dt;
    }

    public function getCurrentDate(): string|null
    {
        return date('d-m-Y H:i', $this->date);
    }
}