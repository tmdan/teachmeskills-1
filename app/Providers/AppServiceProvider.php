<?php

namespace App\Providers;

use App\Services\OpenWeatherApi\OpenWeatherApiService;
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
        $this->app->bind(OpenWeatherApiService::class, function ($app){
            return new OpenWeatherApiService();
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
