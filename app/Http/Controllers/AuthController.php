<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginAuthRequest;
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
        User::create($request->validated());

        return redirect()->route('loginForm');
    }

    public function loginForm()
    {
        return view('pages.login');
    }

    public function login(LoginAuthRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return redirect('/');
        }

        return redirect()->back()->with('status', 'Неправильный логин или пароль');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
