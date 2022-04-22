<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Tag;
use Cviebrock\EloquentSluggable\Sluggable;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    public function category()
    {
        return $this->belongsTo(Category::class);
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

    public function setImageAttribute($value)
    {
        if ($value instanceof UploadedFile) {

            if ($this->image !== null && Storage::exists($this->image)) {
                Storage::delete($this->image);
            }

            return $value->store('uploads');
        }
    }

    public function getImageAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
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
        if ($this->is_publish == 0) {
            return $this->publish();
        } else {
            return $this->unpublish();
        }
    }

    public function recommend()
    {
        $this->is_recommended = true;
        $this->save();
    }

    public function unrecommend()
    {
        $this->is_recommended = false;
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
