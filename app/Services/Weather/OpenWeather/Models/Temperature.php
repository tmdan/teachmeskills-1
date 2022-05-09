<?php


namespace App\Services\Weather\OpenWeather\Models;

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
        $this->temp = $data->main->temp;
        $this->feels_like = $data->main->feels_like;
        $this->temp_min = $data->main->temp_min;
        $this->temp_max = $data->main->temp_max;
        $this->humidity = $data->main->humidity;

    }

    public function getCurrentTemperature(): float
    {
        return $this->temp;
    }

    public function getFeelsLikeTemperature(): float
    {
        return $this->feels_like;
    }

    public function getMinTemperature(): float
    {
        return $this->temp_min;
    }

    public function getMaxTemperature(): float
    {
        return $this->temp_max;
    }

    public function getHumidity(): int
    {
        return $this->humidity;
    }
}
