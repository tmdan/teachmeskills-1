<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    const NO_IMAGE = '/uploads/no-image.png';

    protected $fillable = ['title', 'content'];

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
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
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
        if ($this->is_publish == 1)
            return $this->unpublish();

        return $this->publish();
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
        if ($this->is_recommended == 1)
            return $this->unrecommend();

        return $this->recommend();
    }

    public function scopeRecommended($query)
    {
        return $query->where('is_recommended', 1);
    }

    public function scopePublished($query)
    {
        return $query->where('is_publish', 1);
    }

    public function scopeUnrecommended($query)
    {
        return $query->where('is_recommended', 0);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('is_publish', 0);
    }

    /* public function add($fields)
    {
        $post = new static();
        $post->fill($fields);
        $post->users_id = 1;
        $post->save();

        return $post;
    }*/

    /*public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }*/

    /*public function uploadImage($image)
    {
        if ($image == null) {
            return;
        }

        Storage::delete('uploads/' . $this->image);
        $filename = str_random(10) . '.' . $image->extention();
        $image->saveAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }*/

    /* public function getImage(){
        if($this->image==null){
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->image;
    }*/
}
