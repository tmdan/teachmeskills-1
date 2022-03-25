<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name)
    {
        echo "City - " . $name;
    }

    public function show($name)
    {
        $users = [
            'Roma' => 'Minsk',
            'Lesha' => 'Moskva',
            'Ivan' => 'Madrid',
            'Rita' => 'Rome',
            'Sasha' => 'Pinsk',
        ];
        return view("user.show", ["city"=> $users[$name]]);
    }
}
