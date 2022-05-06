<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'avatar',
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

    public function posts()
    {
        return $this -> hasMany(Post::class);
    }

    public function comments()
    {
        return $this -> hasMany(Comment::class);
    }

    public function setPasswordAttribute($request)
    {
        if ($request != null) $this->attributes['password'] = bcrypt($request);
    }

    public function getPasswordAttribute($request)
    {
        return $request;
    }

    public function setAvatarAttribute($request)
    {

        if ($request instanceof UploadedFile) {

            if ($this->avatar !== self::NO_IMAGE && Storage::exists($this->avatar)) {
                Storage::delete($this->avatar);
            }


            $this->attributes['avatar'] = $request->store("uploads");
        }
    }

    public function getAvatarAttribute($request)
    {
        if ($request !== null) {
            return $request;
        }
        return self::NO_IMAGE;
    }
}
