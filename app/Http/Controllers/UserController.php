<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($name)
    {
        $cities = [
            'masha' => 'Minsk',
            'sasha' => 'Moscow',
            'oleg' => 'Kiev'
        ];
        if(array_key_exists($name, $cities)){
            return view("test.index", ["city" => $cities[$name]]);
        }else{
            echo "Error 404";
        }
    }
    public function showFeedbacks($id){
        $user = User::all();
        dd($user[$id]->feedbacks);
        //сделала логику для любого айдишника юзера, тут она была уместна я думаю
    }
}
