<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function React\Promise\all;

class UserController extends Controller
{

    public function index()
    {

        $users = User::all();
        return view('admin.users.index', ['users' => $users]);

    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        if($request->password == null)
        {
           // СОХРАНЕНИЕ БЕЗ АТТРИБУТА password МОДЕЛИ $user
        }


        $userattributes = $user->getAttributes();

        foreach ($userattributes as $attributename=>$value){
            if (array_key_exists($attributename, $request->all())){
                $user->$attributename = $request->$attributename;
            }
        }
        $user->save();


        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
