<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where("is_publish", true);
    }

    protected function body(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $user = User::find($this->id)->first();
                return $value . " from " . $user->name;
            }
        );
    }
}
