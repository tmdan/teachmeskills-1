<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\User;
use Illuminate\Console\Command;

class CategoryDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categories:delete {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if($this->option('force')){

            $bar = $this->output->createProgressBar(5);

            $bar->start();

            foreach (array_fill(0, 5, rand(0,100)) as $value) {

                sleep(1);

                $bar->advance();
            }

            $bar->finish();
        }

        else{

            if($this->confirm('Are you sure?')){

                $bar = $this->output->createProgressBar(5);

                $bar->start();

                foreach (array_fill(0, 5, rand(0,100)) as $value) {

                    sleep(1);

                    $bar->advance();
                }

                $bar->finish();
            }
        }





        return 0;
    }
}
