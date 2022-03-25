<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name)
    {
        {
            $cities = [
                'maksim' => 'minsk',
                'vanya' => 'new-york',
                'kostya' => 'los-angeles',
            ];
        }

        if (array_key_exists($name, $cities)) {
            return view('user.index', ["city" => $cities[$name]]);
        } else {
            echo "Error 404";
        }
        return $cities[$name];
    }
}
