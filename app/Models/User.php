<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const NO_IMAGE = "uploads/no-image.png";

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

    protected $dates = ['deleted_at'];

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
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function comments(){
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
    public function setAvatarAttribute($value)
    {
        if ($value instanceof UploadedFile) {

            if ($this->avatar !== null && Storage::exists($this->avatar) && $this->avatar !== self::NO_IMAGE) {
                Storage::delete($this->avatar);
            }

            $this->attributes['avatar'] = $value->store("uploads");
        }
    }
    public function getAvatarAttribute($value){
        return $value ?? self::NO_IMAGE;
    }
}
