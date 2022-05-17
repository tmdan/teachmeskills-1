<?php

namespace App\Services\Weather\Template\Models;

interface CoordinationInterface
{
    /**
     * Ширина
     * @return float
     */
    public function getLon(): float|null;


    /**
     * Долгота
     * @return float
     */
    public function getLat(): float|null;


    /**
     * Название города
     * @return string
     */
    public function getCityName(): string|null;

}