<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm()
    {
    return view("pages.register");
    }
}
