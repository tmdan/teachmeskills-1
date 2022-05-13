<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    const NO_IMAGE = '/uploads/no-image.png';

    protected $fillable = [
        'title',
        'content',
        'date',
        'image',
        'is_published',
        'is_recommended',
        'description',
    ];

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
        $this->is_published = true;
        $this->save();
    }

    public function unpublished()
    {
        $this->is_published = false;
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
        $this->is_recommended = true;
        $this->save();
    }

    public function unrecommended()
    {
        $this->is_recommended = false;
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
        return $query->where('is_published', true);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('is_published', false);
    }

    public function scopeRecommended($query)
    {
        return $query->where('is_recommended', true);
    }

    public function scopeUnrecommended($query)
    {
        return $query->where('is_recommended', false);
    }

    public function setImageAttribute($value)
    {
        if ($value instanceof UploadedFile) {

            if ($this->image !== self::NO_IMAGE && Storage::exists($this->image)) {
                Storage::delete($this->image);
            }

            $this->attributes['image'] = $value->store('uploads');
        }
    }

    public function getImageAttribute($value)
    {
        {
            if ($value !== null) {
                return $value;
            }
            return self::NO_IMAGE;
        }
    }

    /* public function setDateAttribute($value)
     {
        $date = Carbon::createFromFormat('d/m/y', $value)->format('Y-m-d');
        $this->attributes['date'] = $date;
     }*/

    public function setCategory($id)
    {
        if ($id == null) {
            return;
        }
        $this->category_id = $id;
        $this->save();
    }

    public function setTags($ids)
    {
        if ($ids == null) {
            return;
        }
        $this->tags()->sync($ids);
    }

    public function getCategoryTitle()
    {
        if ($this->category !== null) {
            return $this->category->title;
        }
        return 'Без категории';
    }

    public function getTagsTitles()
    {
        if (!$this->tags->isEmpty()) {
            return implode(', ', $this->tags->pluck('title')->all());
        }
        return 'Без тегов';
    }

    public function hasPrevious()
    {
        return self::where('id', '<', $this->id)->max('id');
    }

    public function getPostPrevious()
    {
        $postID = $this->hasPrevious();
        return self::find($postID);
    }

    public function hasNext()
    {
        return self::where('id', '>', $this->id)->min('id');
    }

    public function getPostNext()
    {
        $postID = $this->hasNext();
        return self::find($postID);
    }

    public function related()
    {
        return self::all()->except($this->id);
    }
}



