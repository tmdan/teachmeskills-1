<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\StoreProfileRequest;
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
        $user = Auth::user();
        $user->update($request->validated());

        return redirect()->back()->with('status', 'Профиль успешно обновлен');
    }
}
