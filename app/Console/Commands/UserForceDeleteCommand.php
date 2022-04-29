<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

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
    protected $description = 'Delete users who have been deleted by SoftDelete';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $users = User::onlyTrashed()->get();
        foreach ($users as $user)
        {
            $user->forceDelete();
        }


        return 0;
    }
}
