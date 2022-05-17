<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToAlias;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


class Post extends Model
{
    use HasFactory;
    use Sluggable;

    const UNPUBLISH = false;
    const PUBLISH = true;
    const RECOMMENDED = true;
    const UNRECOMMENDED = false;
    const NO_IMAGE = 'uploads/no-image.png';
    protected $hidden = [
        'created_at'
    ];

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'user_id',
        'is_publish',
        'is_recommended',
        'views',
        'image',
    ];


    protected $casts = [
        'is_publish' => 'boolean',
        'is_recommended' => 'boolean',
    ];

    /**
     * Метод для формирования slug
     * @return \string[][]
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Категория поста
     * @return BelongsToAlias
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Автор поста
     * @return BelongsToAlias
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Cписок тегов
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }


    /**
     *  Метод, который выставляет маркер публикации на "не доступен"
     * @return void
     */
    public function publish(): void
    {
        $this->is_publish = self::PUBLISH;
        $this->save();
    }


    /**
     *  Метод, который выставляет маркер публикации на "не доступен"
     * @return void
     */
    public function unpublish(): void
    {
        $this->is_publish = self::UNPUBLISH;
        $this->save();
    }


    /**
     *  Метод, который будет переключать при каждой вызове между статусами "не доступен" и "доступен"
     * @return void
     */
    public function togglePublish(): void
    {
        $this->is_publish ? $this->unpublish() : $this->publish();
    }


    /**
     * Метод - который будет выставлять маркер рекомендации - на "рекомендовано"
     * @return void
     */
    public function recommend(): void
    {
        $this->is_recommended = self::RECOMMENDED;
        $this->save();
    }


    /**
     * Метод - который будет выставлять маркер рекомендации - на "не рекомендовано".
     * @return void
     */
    public function unrecommend(): void
    {
        $this->is_recommended = self::UNRECOMMENDED;
        $this->save();
    }


    /**
     * Метод, который будет переключать при каждой вызове между статусами "рекомендовано" и "не рекомендовано".
     * @return void
     */
    public function toggleRecommend(): void
    {
        $this->is_recommended == self::RECOMMENDED ? $this->unrecommend() : $this->recommend();
    }


    /**
     * Scope - который будет добавлять фильтрацию по постам - только рекомендованные
     * @param $query
     * @return mixed
     */
    public function scopeRecommended($query)
    {
        return $query->where('is_recommended', self::RECOMMENDED);
    }


    /**
     * Scope - который будет добавлять фильтрацию по постам - только опубликованные
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('is_publish', self::PUBLISH);
    }


    /**
     * Scope - который будет добавлять фильтрацию по постам - только рекомендованные
     * @param $query
     * @return mixed
     */
    public function scopeUnrecommended($query)
    {
        return $query->where('is_recommended', self::UNRECOMMENDED);
    }


    /**
     * Scope - который будет добавлять фильтрацию по постам - только не рекомендованные
     * @param $query
     * @return mixed
     */
    public function scopeUnpublished($query)
    {
        return $query->where('is_publish', self::UNPUBLISH);
    }


    public function setImageAttribute($value)
    {

        if ($value instanceof UploadedFile) {

            if ($this->image !== null && Storage::exists($this->image)) {
                Storage::delete($this->image);
            }

            $this->attributes['image'] = $value->store("uploads");
        }
    }

    public function getImageAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
    }

    public function hasPrevious()
    {
        return self::where("id", "<", $this->id)->max("id");
    }

    public function getPrevious()
    {
        $postID = $this->hasPrevious();
        return self::find("$postID");
    }

    public function hasNext()
    {
        return self::where("id", ">", $this->id)->min("id");
    }

    public function getNext()
    {
        $postID = $this->hasNext();
        return self::find("$postID");
    }

    public function related()
    {
        return self::all()->except($this->id);
    }

    public function hasCategory()
    {
        return $this->category != null ? true : false;
    }

    public static function getPopularPosts()
    {
        return self::orderBy("views", "desc")->take(3)->get();
    }

    public static function getFeaturedPosts()
    {
        return self::where("is_recommended", 1)->take(3)->get();
    }

    public static function getRecentPosts()
    {
        return self::orderBy("created_at", "desc")->take(4)->get();
    }
}
