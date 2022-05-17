<?php

namespace App\Providers;

use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{
    // регистрируем контейнеры
    public function register()
    {
        // для сервисов и провайдеров
        $this->app->bind(WeatherServiceContract::class, function (){
            return new OpenWeatherService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // для фасадов
        //$this->app->bind('weather', OpenWeatherService::class);
    }
}
