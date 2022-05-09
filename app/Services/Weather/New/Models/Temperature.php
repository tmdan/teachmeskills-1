<?php


namespace App\Services\Weather\New\Models;

use App\Services\Weather\Template\Models\TemperatureInterface;

class Temperature implements TemperatureInterface
{
    /**
     * Текущая температура
     * @var float
     */
    private float $temp;

    /**
     * Ощущается как
     * @var float
     */
    private float $feels_like;


    /**
     * Минимальная суточная температура
     * @var float
     */
    private float $temp_min;

    /**
     * Максимальная суточная температура
     * @var float
     */
    private float $temp_max;

    /**
     * Давление
     * @var int
     */
    private int $pressure;


    /**
     * Влажность в процентах
     * @var int
     */
    private int $humidity;


    public function __construct(object $data)
    {
        $this->temp = $data->temp;
        $this->feels_like = $data->feels_like;
        $this->temp_min = $data->temp_min;
        $this->temp_max = $data->temp_max;
        $this->humidity = $data->humidity;

    }

    public function getCurrentTemperature(): float
    {
        return 0.0;
    }

    public function getFeelsLikeTemperature(): float
    {
        return 0.0;
    }

    public function getMinTemperature(): float
    {
        return 0.0;
    }

    public function getMaxTemperature(): float
    {
        return 0.0;
    }

    public function getHumidity(): int
    {
        return 0;
    }
}
