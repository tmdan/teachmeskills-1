<?php

namespace App\Services\Weather\Interfaces\Models;

interface GeneralnformationModelContract
{
    function getNameCity(): string|null;
    function getIcon(): string|null;
    function getDescription(): string|null;
}
