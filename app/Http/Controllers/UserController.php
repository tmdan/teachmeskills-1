<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name)
    {
        echo "City - " . $name;
    }

    public function show($name)
    {
        $cities = [
            'Roma' => 'Minsk',
            'Lesha' => 'Moskva',
            'Ivan' => 'Madrid',
            'Rita' => 'Rome',
            'Sasha' => 'Pinsk',
        ];
        if (array_key_exists($name, $cities)) {
            return view("user.show", ["city" => $cities[$name]]);
        } else {
            echo "name is not correct";
        }
    }

    public function showId($id)
    {
        $users = User::where("id", $id)->get();
    }
}
