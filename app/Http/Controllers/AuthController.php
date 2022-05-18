<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterAuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function registerForm()
    {
        return view('pages.register');
    }

    public function register(RegisterAuthRequest $request)
    {
        $user = User::create($request->validated());
        //Auth::login($user);
        return redirect()->route('loginForm');
    }

    public function loginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {

    }

}
