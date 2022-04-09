<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\User;

class UserController extends Controller
{
    public function feedback($id)
    {
        $feedbacks = Feedback::where('user_id', $id)->get();
        foreach ($feedbacks as $feedback) {
            dump($feedback->body);
        }
    }

    public function showId($id)
    {

        $users = User::where('id', $id)->get();

        foreach ($users as $user) {
            dump($user->name);
        }
    }
}
