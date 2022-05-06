<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserObserver
{

    public function created(User $user)
    {
        //
    }


    public function updated(User $user)
    {
        //
    }


    public function deleted(User $user)
    {
        //
    }


    public function deleting(User $user)
    {

    }

    public function restored(User $user)
    {
        //
    }


    public function forceDeleted(User $user)
    {
        if($user->avatar != User::NO_IMAGE)
        {
            Storage::delete($user->avatar);
        }
    }
}
