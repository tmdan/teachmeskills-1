<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this -> hasOne(Post::class);
    }

    public function author()
    {
        return $this -> hasOne(User::class);
    }

    public function publish()
    {
        $this->is_publish = true;
        $this->save();
    }

    public function unpublish()
    {
        $this->is_publish = false;
        $this->save();
    }

    public function togglePublish()
    {
        if ($this->is_publish == false) {
            return $this->publish();
        } else {
            return $this->unpublish();
        }
    }

    public function scopePublished($query)
    {
        $query->where('is_publish', true);
    }

    public function scopeUnpublished($query)
    {
        $query->where('is_publish', false);
    }
}
