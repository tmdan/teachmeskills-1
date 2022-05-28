<?php

namespace App\Services\Weather\Interfaces\Models;

interface CloudinessInterface
{
    //  Изображение
    public function getIcon(): string|null;

    //  Описание
    public function getDescription(): string|null;
}