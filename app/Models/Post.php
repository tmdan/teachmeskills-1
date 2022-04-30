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
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
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
        $this->is_publish = true;
        $this->save();
    }

    public function unpublished()
    {
        $this->is_publish = false;
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
        return $query->where('is_publish', true);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('is_publish', false);
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

            return $value->store('uploads');
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

    public function setDateAttribute($value)
    {
       $date = Carbon::createFromFormat('d/m/y', $value)->format('Y-m-d');
       $this->attributes['date'] = $date;
    }
}

