<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Models\User;
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
    protected $description = 'deleting users at database by force whith avatar';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::onlyTrashed()->get();
        foreach ($users as $user){
            $user->forceDelete();
        }
        return 0;
    }
}
