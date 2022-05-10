<?php

namespace App\Http\Controllers;

use App\Services\Weather\Template\WeatherServiceInterface;


class HomeController extends Controller
{
    public function index()
    {
        //dd($openWeatherApiService->coordinates()->getCityName());

//        $data = Http::get("https://api.openweathermap.org/data/2.5/weather?q=Minsk&appid=5cc014b5ee90117eb3ad4f8c758455c4&lang=ru&units=metric")->json();
//
//        dd($data);


        //dd((new OpenWeatherApiService())->getInfo()->main);

       return view('pages.index', ['posts' => Post::with(['author', 'category'])->paginate(1)]);
    }
}
