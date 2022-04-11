<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    const NO_IMAGE = '/uploads/no-image.png';


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
            'tag_id',
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ]; /*привет -> privet (дубликаций нет, добавляется последующее число повтороения)*/
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

    public function recommend()
    {
        $this->is_recommend = true;
        $this->save();
    }

    public function unrecommend()
    {
        $this->is_recommend = false;
        $this->save();
    }

    public function toggleRecommend()
    {
        if ($this->is_recommend == false) {
            return $this->recommend();
        } else {
            return $this->unrecommend();
        }
    }

    public function scopeRecommended($query)
    {
        $query->where('is_recommend', true);
    }

    public function scopePublished($query)
    {
        $query->where('is_publish', true);
    }

    public function scopeUnrecommended($query)
    {
        $query->where('is_recommend', false);
    }

    public function scopeUnpublished($query)
    {
        $query->where('is_publish', false);
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

    public function getImageAttribute($value): string
    {
        return $value ?? self::NO_IMAGE;
    }
}

//$post = Post::find(1); вытащим пост пол ID 1
//$post -> category -> title название категории
//$post -> tags все теги
//$post -> author -> name достучимся до значения User
