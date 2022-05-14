<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
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
        Paginator::defaultView('vendor.pagination.default');

        view()->composer('pages._sidebar', function ($view){
            $view->with('popularPosts', Post::orderBy('views', 'desc')->take(2)->get());
            $view->with('recommendedPosts', Post::where('is_recommended', true)->take(2)->get());
            $view->with('recentPosts', Post::orderBy('id', 'desc')->take(2)->get());
            $view->with('categories', Category::all());
        });
    }
}
