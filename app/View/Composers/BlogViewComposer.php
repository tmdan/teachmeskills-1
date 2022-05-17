<?php

namespace App\View\Composers;
use App\Models\Category;
use App\Models\Post;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\View\View;

class BlogViewComposer
{
    protected $weather;
    public function __construct(WeatherServiceContract $weather)
    {
        $this->weather = $weather;
    }

    public function compose(View $view)
    {
        $view->with('popularPosts', Post::orderBy('views', 'desc')->take(2)->get());
        $view->with('recommendedPosts', Post::where('is_recommended', true)->take(2)->get());
        $view->with('recentPosts', Post::orderBy('id', 'desc')->take(2)->get());
        $view->with('categories', Category::all());
        $view->with('weather', $this->weather);
    }
}
