<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const NO_IMAGE = 'uploads/no-image.png';



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Все посты конкретного пользователя
     * @return HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Все комментарии конкретного пользователя
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Сеттеры и Геттеры для поля Password
     * @return Attribute
     */
    protected function password(): Attribute
    {
        return Attribute::make(

            get: fn ($value) => $value,

            set: function ($value){
                if($value!==null) bcrypt($value);
            }
        );
    }

    public function setAvatarAttribute($value)
    {

        if ($value instanceof UploadedFile) {

            if ($this->avatar !== null && Storage::exists($this->avatar)) {
                Storage::delete($this->avatar);
            }

            $this->attributes['avatar'] = $value->store("uploads");
        }
    }

    public function getAvatarAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
    }
}
