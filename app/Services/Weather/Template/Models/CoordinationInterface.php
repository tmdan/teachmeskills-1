<?php

namespace App\Services\Weather\Template\Models;

interface CoordinationInterface
{
    /**
     * Ширина
     * @return float
     */
    public function getLon(): float;


    /**
     * Долгота
     * @return float
     */
    public function getLat(): float;
}