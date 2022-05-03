<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\SingUpNotification;
use Illuminate\Support\Facades\Storage;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function created(User $user)
    {
        $admins = User::where('is_admin', true)->get();

        foreach ($admins as $admin){
            //$admin->notify(new SingUpNotification($user));
            $admin->notify(new SingUpNotification($user));
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function deleted(User $user)
    {
    }

    public function deleting(User $user)
    {
    }

    /**
     * Handle the User "restored" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    public function forceDeleted(User $user)
    {
        if ($user->avatar !== User::NO_IMAGE && isset($user->avatar)) {
            Storage::delete($user->avatar);
        }
    }
}
