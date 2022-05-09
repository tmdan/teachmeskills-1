<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\Weather\Template\WeatherServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(WeatherServiceInterface $openWeatherApiService)
    {


        dd($openWeatherApiService->coordinates()->getCityName());


//        $data = Http::get("https://api.openweathermap.org/data/2.5/weather?q=Minsk&appid=5cc014b5ee90117eb3ad4f8c758455c4&lang=ru&units=metric")->json();
//
//        dd($data);


        //dd((new OpenWeatherApiService())->getInfo()->main);

       // return view('pages.index', ['posts' => Post::with(['author', 'category'])->paginate(1)]);
    }
}
