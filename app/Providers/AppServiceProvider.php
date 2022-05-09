<?php

namespace App\Providers;

use App\Services\Weather\New\SomeNewWeatherService;
use App\Services\Weather\Template\WeatherServiceInterface;
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
        $this->app->bind(WeatherServiceInterface::class, function ($app){
            return new SomeNewWeatherService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        Paginator::useBootstrapFour();
    }
}
