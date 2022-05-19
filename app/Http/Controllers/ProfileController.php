<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.profile', ['user' => $user]);
    }

    public function store(StoreProfileRequest $request)
    {
        /*$this->validate($request, [
            'name' => 'string|required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'password' => 'required',
            'avatar' => 'nullable|image',
        ]);*/

        $user = Auth::user();
        $user->update($request->validated());

        return redirect()->back()->with('status', 'Профиль успешно обновлен');
    }
}
