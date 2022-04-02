<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function publish()
    {
        $this->is_published = 1;
        $this->save();
    }

    public function unpublish()
    {
        $this->is_published = 0;
        $this->save();
    }

    public function togglePublish($value)
    {
        if ($this->is_published == 0)
        {
            return $this->publish();
        }
        return $this->unpublish();
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', 1);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('is_published', 0);
    }
}
