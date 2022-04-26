<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class UserForceDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:force-delete {--force} {user=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Force delete users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        

        $this->table(
            ['Name', 'Email'],
            User::all(['name', 'email'])->toArray()
        );


        dd("dsf");

        match (true) {
            $this->option('force') ||  $this->option('quiet') => User::onlyTrashed()->forceDelete(),
            $this->confirm('Do you wish to continue force delete users?') => User::onlyTrashed()->forceDelete(),
        };

        return 0;
    }
}
