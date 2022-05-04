<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class PostForceDeleteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:force-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'deleting posts at database by force whith image';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $posts = Post::onlyTrashed()->get();
        foreach ($posts as $post){
            $post->forceDelete();
        }
        return 0;
    }
}
