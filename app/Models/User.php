<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use MongoDB\Driver\Server;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const NO_IMAGE = 'uploads/no-image.jpg';

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function password():Attribute
    {
        return Attribute::make(
            set: fn($value) => Hash::make($value)
        );
    }

    public function getAvatarAttribute($value)
    {
        if($value != null){
           return asset('/storage/'.$value);
        }
        return asset('/storage/'.self::NO_IMAGE);
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
}
