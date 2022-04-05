<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'content'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function author()
    {
        return $this->hasOne(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'post_tag',
            'post_id',
            'tag_id'
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function published()
    {
        $this->is_publish = 1;
        $this->save();
    }

    public function unpublished()
    {
        $this->is_publish = 0;
        $this->save();
    }

    public function togglePublished($value)
    {
        if ($value == null) {
            return $this->unpublished();
        }
        return $this->published();
    }

    public function recommended()
    {
        $this->is_recommended = 1;
        $this->save();
    }

    public function unrecommended()
    {
        $this->is_recommended = 0;
        $this->save();
    }

    public function toggleRecommended($value)
    {
        if ($value == null) {
            return $this->unrecommended();
        }
        return $this->recommended();
    }

    public function scopePublished($query)
    {
        return $query->where('is_publish', 1);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('is_publish', 0);
    }

    public function scopeRecommended($query)
    {
        return $query->where('is_recommended', 1);
    }

    public function scopeUnrecommended($query)
    {
        return $query->where('is_recommended', 0);
    }
}
