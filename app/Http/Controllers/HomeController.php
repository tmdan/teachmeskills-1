<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Services\Weather\Interfaces\WeatherServiceInterface;

class HomeController extends Controller
{
    public function index(WeatherServiceInterface $weather)
    {
        $posts = Post::all();
        $tags = Tag::all();

        return view('pages.index', [
            'posts' => $posts,
            'tags'  => $tags,
            'weather' => $weather
        ]);
    }


    public function show($id)
    {
        //
    }


}
