<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name)
    {
        $users = [
            'ivan'=>'Москва',
            'egor'=>'Питер',
            'igor'=>'Минск',
        ];
        return view('user.show', ['city'=> $users[$name]]);

    }
}
