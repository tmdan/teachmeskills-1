<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Tags extends Model
{
    use Sluggable;
    public function posts(){
        return $this->belongsToMany(Post::class, "post_tag", "tag_id", "post_id");
    }
     public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}