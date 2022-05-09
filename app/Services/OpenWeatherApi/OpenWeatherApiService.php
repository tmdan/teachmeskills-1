<?php

namespace App\Services\OpenWeatherApi;

use App\Services\OpenWeatherApi\Models\Weather;
use Illuminate\Support\Facades\Http;

class OpenWeatherApiService
{
    private $apiKey;
    private $city;
    private $lang;
    private $units;

    private function getConnect()
    {
        return Http::get("https://api.openweathermap.org/data/2.5/weather?q={$this->city}&appid={$this->apiKey}&lang={$this->lang}&units={$this->units}");
    }

    public function __construct()
    {
        $this->apiKey = config('weahterapi.api-key');
        $this->city = config('weahterapi.city');
        $this->lang = config('weahterapi.lang');
        $this->units = config('weahterapi.units');
    }

    public function getInfo()
    {
        return new Weather($this->getConnect()->object());
    }
}