<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_publish', 1);
    }

    protected function body(): Attribute
    {
        return Attribute::make(
            get: function ($value) {

                $user = User::find($this->id)->first();

                return $value . ' from ' . $user->name ;

            }

        );
    }
}
