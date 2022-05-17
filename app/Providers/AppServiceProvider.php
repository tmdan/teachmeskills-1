<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*view()->composer('pages._sidebar', function ($view){
            $view->with('popularPost', Post::orderBy('views', 'desc')->take(3)->get());
            $view->with('recommendedPost', Post::where('is_recommended', true)->take(3)->get());
            $view->with('recentPost', Post::orderBy('date', 'desc')->take(4)->get());
            $view->with('categories', Category::all());
        });*/
    }
}
