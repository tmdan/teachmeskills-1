<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name)
    {
        $users = [
            'ivan' => 'Москва',
            'oleg' => 'Минск',
            'igor' => 'Прага'
        ];

        if(!array_key_exists($name, $users)){
            return view("user.index", ['city' => 'Такого пользователя не существует']);
        }
        return view("user.index", ['city' => $users[$name]]);
    }
}
