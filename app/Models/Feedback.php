<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function user(){
        return $this->hasOne(User::class);
    }
    public function scopePublished($query){
        $query->where('is_publish', true);
    }
    public function getBodyAttribute($value){
        $username = $this->user();
        return $value."<br> from $username";
    }
}
