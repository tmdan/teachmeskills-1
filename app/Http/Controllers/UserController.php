<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name){
        $users = [
            'kate' => 'Minsk',
            'semen' => 'Brest',
            'ivan'=>'Gomel'
        ];

        if(array_key_exists($name, $users)){
            //return view("index", ["city" => $cities[$name]]);
            return view('citys', ['var1'=>$name, 'var2' => $users[$name]] );
        }else{
            echo "name is not correct";
        }



        //return $users[$name];
    }
}
