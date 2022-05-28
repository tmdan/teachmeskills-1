<?php

namespace App\Services\Weather\Interfaces\Models;

interface DateInterface
{
    //  получить текущую дату
    public function getCurrentDate(): string|null;

}