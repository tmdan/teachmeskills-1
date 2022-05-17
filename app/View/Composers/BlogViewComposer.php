<?php

namespace App\View\Composers;

use App\Models\Category;
use App\Models\Post;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\View\View;

class BlogViewComposer
{
    protected $weatherService;

    public function __construct(WeatherServiceContract $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function compose(View $view)
    {
        $view->with('popularPost', Post::orderBy('views', 'desc')->take(3)->get());
        $view->with('recommendedPost', Post::where('is_recommended', true)->take(3)->get());
        $view->with('recentPost', Post::orderBy('date', 'desc')->take(4)->get());
        $view->with('categories', Category::all());

        $view->with('weatherService', $this->weatherService);
    }
}
