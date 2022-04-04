<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name){
        $cities = [
            'kate' => 'Minsk',
            'semen' => 'Brest',
            'ivan'=>'Gomel'
        ];

        if(array_key_exists($name, $cities)){
            //return view("index", ["city" => $cities[$name]]);
            return view('city.citys', ['city' => $cities[$name]] );
        }else{
            echo "name is not correct";
        }



        //return $users[$name];
    }
}
