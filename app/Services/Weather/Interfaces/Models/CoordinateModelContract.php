<?php

namespace App\Services\Weather\Interfaces\Models;

interface CoordinateModelContract
{
    function getLon(): float|null;

    function getLat(): float|null;
}
