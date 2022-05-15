<?php

namespace App\Observers\Admin;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{

    public function created(Post $post)
    {
        //
    }

    public function updated(Post $post)
    {
        //
    }

    public function deleted(Post $post)
    {
        //
    }

    public function deleting(Post $post)
    {
        if($post->image !== Post::NO_IMAGE && isset($post->image))
        {
            Storage::delete($post->image);
        }
    }

    public function restored(Post $post)
    {
        //
    }

    public function forceDeleted(Post $post)
    {
        //
    }
}
