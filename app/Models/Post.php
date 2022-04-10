<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Post extends Model
{
    use HasFactory, Sluggable;

    const NO_IMAGE = 'uploads/no-image.png';
//
//    protected $fillable = [
//        'title',
//        'slug',
//        'content',
//        'image',
//        'category_id',
//        'user_id'
//    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
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

    public function publish()
    {
        $this->is_published = true;
        $this->save();
    }

    public function unpublish()
    {
        $this->is_published = false;
        $this->save();
    }

    public function togglePublish($value)
    {
        if (!is_null($value))
        {
            return $this->publish();
        }
        return $this->unpublish();
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

    public function toggleRecommend($value)
    {
        if (!is_null($value))
        {
            return $this->recommend();
        }
        return $this->unrecommend();
    }

    public function scopeRecommended($query)
    {
        return $query->where('is_recommended', true);
    }

    public function scopeUnrecommended($query)
    {
        return $query->where('is_recommended', false);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('is_published', false);
    }

    public function getImageAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
    }

    public function setImageAttribute($value)
    {
        if ($value instanceof UploadedFile) {

            if ($this->image !== null && Storage::exists($this->image))
            {
                Storage::delete($this->image);
            }

            return $value->store('uploads');
        }
    }


}
