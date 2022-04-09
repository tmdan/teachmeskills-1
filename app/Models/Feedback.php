<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function getBodyAttribute($body)
    {
        return $body . ' — from ' . User::find($this->user_id)->name;
    }

}
