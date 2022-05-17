<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use App\View\Composers\BlogViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(["pages._sidebar", 'weather.index'], BlogViewComposer::class);
    }
}
