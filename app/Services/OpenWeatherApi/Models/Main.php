<?php


namespace App\Services\OpenWeatherApi\Models;


class Main
{

    /**
     * Текущая температура
     * @var float
     */
    public float $temp;

    /**
     * Ощущается как
     * @var float
     */
    public float $feels_like;


    /**
     * Минимальная суточная температура
     * @var float
     */
    public float $temp_min;

    /**
     * Максимальная суточная температура
     * @var float
     */
    public float $temp_max;

    /**
     * Давление
     * @var int
     */
    public int $pressure;


    /**
     * Влажность в процентах
     * @var int
     */
    public int $humidity;


    public function __construct(object $data)
    {
        $this->temp = $data->temp;
        $this->feels_like = $data->feels_like;
        $this->temp_min = $data->temp_min;
        $this->temp_max = $data->temp_max;
        $this->humidity = $data->humidity;

    }
}
