<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name)
    {
        $cities = [
            'masha' => 'Minsk',
            'sasha' => 'Moscow',
            'oleg' => 'Kiev'
        ];
        if(array_key_exists($name, $cities)){
            return view("test.index", ["city" => $cities[$name]]);
        }else{
            echo "Error 404";
        }
    }
}
