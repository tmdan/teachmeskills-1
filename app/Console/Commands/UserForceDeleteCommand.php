<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class UserForceDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:force-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //User::onlyTrashed()->forceDelete();

        $users = User::onlyTrashed()->get();

        foreach ($users as $user){

            $user->forceDelete();

            if ($user->avatar !== User::NO_IMAGE && isset($user->avatar)) {
                Storage::delete($user->avatar);
            }
        }

        return 0;
    }
}
