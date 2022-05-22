<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    const NO_IMAGE = 'uploads/no-image-2.png';

    protected $fillable = ['title', 'content', 'date', 'image', 'is_publish', 'is_recommended', 'description', 'category_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
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

            if ($this->image !== null && Storage::exists($this->image) && $this->image !== self::NO_IMAGE) {
                Storage::delete($this->image);
            }

            //return $value->store('uploads');
            $this->attributes['image'] = $value->store("uploads");
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

    public function togglePublish($value)
    {
        if ($value == null) {
            return $this->unpublish();
        }
        return $this->publish();
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
        if ($value == null)
            return $this->unrecommend();

        return $this->recommend();
    }

    public function scopeRecommended($query)
    {
        return $query->where('is_recommended', true);
    }

    public function scopePublished($query)
    {
        return $query->where('is_publish', true);
    }

    public function scopeUnrecommended($query)
    {
        return $query->where('is_recommended', false);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('is_publish', false);
    }

    public function setDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d/m/y', $value)->format('Y-m-d');
        $this->attributes['date'] = $date;
    }

    public function getDateAttribute($value)
    {

        $date = Carbon::createFromFormat('Y-m-d', $value)->format('d/m/y');

        return $date;
    }

    public function getDate()
    {
        return Carbon::createFromFormat('d/m/y', $this->date)->format('F d, Y');
    }

    public function setCategory($id)
    {
        if ($id == null) {
            return;
        }

        $this->category_id = $id;
        $this->save();
    }

    /*public function setTags($ids)
    {
        if ($ids == null) {
            return;
        }

        $this->tags()->sync($ids);
        //$this->save();
    }*/

    public function getCategoryTitle()
    {
        if ($this->category != null) {
            return $this->category->title;
        }

        return 'Нет категории';
    }

    public function getTagsTitles()
    {
        if (!$this->tags->isEmpty()) {
            return implode(', ', $this->tags->pluck('title')->all());
        }

        return 'Нет тегов';
    }

    public function hasPrevious()
    {
        return self::where('id', '<', $this->id)->published()->max('id');
    }

    public function hasNext()
    {
        return self::where('id', '>', $this->id)->published()->min('id');
    }

    public function getPrevious()
    {
        $postID = $this->hasPrevious();
        return self::find($postID);
    }

    public function getNext()
    {
        $postID = $this->hasNext();
        return self::find($postID);
    }

    public function related()
    {

        return self::published()->get()->except($this->id);
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
