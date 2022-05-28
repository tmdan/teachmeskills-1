<?php

namespace App\Providers;

use App\Services\Weather\Interfaces\WeatherServiceInterface;
use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(WeatherServiceInterface::class, function (){
            return new OpenWeatherService();
        });
    }

    public function boot()
    {
        //
    }
}
