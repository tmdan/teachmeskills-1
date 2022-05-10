<?php

namespace App\Services\Weather\Template\Models;

interface TemperatureInterface
{

    /**
     * Получить текущую температуру
     * @return float
     */
    public function getCurrentTemperature(): float|null;

    /**
     * Получить температуру - ощущается как
     * @return float
     */
    public function getFeelsLikeTemperature(): float|null;

    /**
     * Получить минимальную суточную температуру
     * @return float
     */
    public function getMinTemperature(): float|null;

    /**
     * Получить максимальную суточную температуру
     * @return float
     */
    public function getMaxTemperature(): float|null;

    /**
     * Получить показатели давления
     * @return int
     */
    public function getHumidity(): int|null;


    /**
     * И так далее
     */
}