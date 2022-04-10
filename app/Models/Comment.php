<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    const UNPUBLISH = false;
    const PUBLISH = true;

    use HasFactory;

    /**
     * Пост к которому принадлежит комментарий
     * @return HasOne
     */
    public function post()
    {
        return $this->hasOne(Post::class);
    }

    /**
     * Автор комментария
     * @return HasOne
     */
    public function author()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Метод - который будет выставлять маркер публикации - "на доступен".
     * @return void
     */
    public function publish()
    {
        $this->is_publish = self::PUBLISH;
        $this->save();
    }

    /**
     *  Метод, который выставляет маркер публикации на "не доступен"
     * @return void
     */
    public function unpublish()
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
        $this->is_publish == self::PUBLISH ? $this->unpublish() : $this->publish();
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
     * Scope - который будет добавлять фильтрацию по постам - только не опубликованные
     * @param $query
     * @return mixed
     */
    public function scopeUnpublished($query)
    {
        return $query->where('is_publish', self::UNPUBLISH);
    }
}
