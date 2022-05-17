<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\Weather\Template\WeatherServiceInterface;


class HomeController extends Controller
{
    public function index()
    {

       return view('pages.index', ['posts' => Post::with(['author', 'category'])->paginate(10)]);
    }
}
