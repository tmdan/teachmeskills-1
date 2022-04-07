<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /*Получите все страны вместе с их городами. Города каждой страны отсортируйте по возрастания населения*/
    public function show()
    {
        $countries = Country::with(['cities' => function ($query) {
            $query->orderBy('population');
        }])->get();

        foreach ($countries as $country) {
            foreach ($country->cities as $city) {
                dump($country->name . " " . $city->name . ' ' . $city->population);
            }
        }
    }

    public function showPopulation()
    {
        $countries = Country::with(['cities' => function ($query) {
            $query->where('population', ">", "100000");
        }])->get();

        foreach ($countries as $country) {
            foreach ($country->cities as $city) {
                dump($country->name . " " . $city->name . ' ' . $city->population);
            }
        }
    }
}
