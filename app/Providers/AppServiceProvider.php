<?php

namespace App\Providers;

use App\Services\Weather\OpenWeather\OpenWeatherService;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind(WeatherServiceInterface::class, function ($app){
//            return new OpenWeatherService();
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->singleton('weather', OpenWeatherService::class);

//        Paginator::useBootstrapFour();
    }
}
