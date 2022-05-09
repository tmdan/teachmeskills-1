<?php

namespace App\Services\Weather\Template;

use App\Services\Weather\OpenWeather\Models\Coordinate;
use App\Services\Weather\OpenWeather\Models\Temperature;
use App\Services\Weather\Template\Models\CoordinationInterface;
use App\Services\Weather\Template\Models\TemperatureInterface;

interface WeatherServiceInterface
{
    /**
     * Метод который должен получать данные с внешних источников
     * @return object
     */
    function response(): object;

    /**
     * Метод, который возвращает регламентированный формат данных местоположения
     * @return Coordinate
     */
    function coordinates(): CoordinationInterface;

    /**
     * Метод, который возвращает регламентированный формат данных температуры
     * @return Temperature
     */
    function temperature(): TemperatureInterface;
}