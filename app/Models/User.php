<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


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
        'avatar',
        'status',
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
        return $this->hasMany(Post::class);
    }

    public function сomments()
    {
        return $this->hasMany(Comment::class);
    }

    public function setPasswordAttribute($value)
    {
        if ($value != null)
            $this->attributes['password'] = bcrypt($value);
    }

    public function getPasswordAttribute($value)
    {
        return $value;
    }

    /*protected function password(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value,

            set: function ($value){
                if($value !== null)
                    return Hash::make($value);
                else
                    return $this->password;
            },
        );
    }*/

    public function getAvatarAttribute($value){
        return $value ?? self::NO_IMAGE;
    }

    public function setAvatarAttribute($value)
    {
        if ($value instanceof UploadedFile) {

            if ($this->avatar !== null && Storage::exists($this->avatar) && $this->avatar !== self::NO_IMAGE) {
                Storage::delete($this->avatar);
            }

            $this->attributes['avatar'] = $value->store("uploads");
        }
    }
}
