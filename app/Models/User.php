<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const NO_IMAGE = '/uploads/no-image.jpg';

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
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

//    public function setPasswordAttribute($request)
//    {
//        $request->user()->fill([
//            'password' => Hash::make($request->newPassword)
//        ])->save();
//    }

    public function setAvatarAttribute($value)
    {

        if ($value instanceof UploadedFile) {

            if ($this->avatar !== self::NO_IMAGE && Storage::exists($this->avatar)) {
                Storage::delete($this->avatar);
            }


            $this->attributes['avatar'] = $value->store("uploads");
        }
    }

    public function getImageAttribute($value)
    {
        return $value ?? self::NO_IMAGE;
    }

    protected function password(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value,

            set: function ($value) {
                if ($value !== null)
                    return Hash::make($value);
            }
        );
    }
}
