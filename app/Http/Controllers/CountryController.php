<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function showPopulation()
    {
        $countries = Country::with(['cities' => function ($query) {
            $query->where('population', ">=", "100000");
        }])->get();

        foreach ($countries as $country) {
            foreach ($country->cities as $city) {
                dump('Страна - '.$country->name .'  Город - '. $city->name .'  Население - '. $city->population);
            }
        }
    }

   // public function show()
   // {
   //     $countries = Country::with(['cities' => function ($query) {
   //         $query->orderBy('population');
   //     }])->get();
   //     dd($countries);
//
    //    foreach ($countries as $country) {
    //        foreach ($country->cities as $city) {
    //            dump('Страна - '.$country->name .'  Город - '. $city->name .'  Население - '. $city->population);
    //        }
    //    }
   // }

    public function show()
    {
        $countries = Country::whereHas('cities', function($q){
            $q->orderBy('population');
        })->get();

        foreach ($countries as $country) {
            foreach ($country->cities as $city) {
                dump('Страна - '.$country->name .'  Город - '. $city->name .'  Население - '. $city->population);
            }
        }
    }
    }

