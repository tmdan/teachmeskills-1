<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Tag;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function autor()
    {
        return $this->hasOne(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'post_tag',
            'post_id',
            'tad_id'
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

//    public function setImageAttribute($image)
//    {
////        $filename = uniqid() . '.' . $image->extension();
////        $image->saveAs('uploads', $filename);
////        $this->attributes['image'] = $filename;
////        $this->save();
//    }
//
//    public function getImageAttribute()
//    {
//    }

    public function publish()
    {
        $this->is_publish = 1;
        $this->save();
    }

    public function unpublish()
    {
        $this->is_publish = 0;
        $this->save();
    }

    public function togglePublish()
    {
        if ($this->is_publish == 0) {
            return $this->publish();
        } else {
            return $this->unpublish();
        }
    }

    public function recommend()
    {
        $this->is_recommended = 1;
        $this->save();
    }

    public function unrecommend()
    {
        $this->is_recommended = 0;
        $this->save();
    }

    public function toggleRecommend()
    {
        if ($this->is_recommended == 0) {
            return $this->recommended();
        } else {
            return $this->unrecommended();
        }
    }

    public function scopeRecommended($query)
    {
        $query->where('is_recommended', 1);
    }

    public function scopePublish($query)
    {
        $query->where('is_publish', 1);
    }

    public function scopeUnrecommended($query)
    {
        $query->where('is_recommended', 0);
    }

    public function scopeUnpublish($query)
    {
        $query->where('is_publish', 0);
    }
}
