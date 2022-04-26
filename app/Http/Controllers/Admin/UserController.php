<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\DestroyUserRequest;
use App\Http\Requests\User\EditUserRequest;
use App\Http\Requests\User\IndexUserRequest;
use App\Http\Requests\User\ShowUserRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;


class UserController extends Controller
{

    public function index(IndexUserRequest $request)
    {
        $users = User::all();

        return view('admin.users.index', ['users' => $users]);
    }


    public function create(CreateUserRequest $request)
    {
        return view('admin.users.create');
    }


    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('admin.users.index');
    }

    public function show(ShowUserRequest $request, User $user)
    {
        //
    }

    public function edit(EditUserRequest $request, User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }


    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('admin.users.index');
    }


    public function destroy(DestroyUserRequest $request, User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
