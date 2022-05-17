<?php
namespace App\Observers;
use App\Models\User;
use App\Notifications\SignUpNotification;
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
            $admin->notify(new SignUpNotification($user));
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

        public function deleting(User $user)
        {

            //
            //
        }

        public function deleted(User $user)
        {
            //
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

        /**
         * Handle the User "force deleted" event.
         *
         * @param \App\Models\User $user
         * @return void
         */
        public function forceDeleted(User $user)
        {
            if ($user->avatar != User::NO_IMAGE && Storage::exists($user->avatar)) {
                Storage::delete($user->avatar);
            }
        }
    }
