<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Feedback extends Model
{
    public function user(){
        return $this->hasOne(User::class);
    }
    public function scopePublished($query){
        $query->where('is_publish', true);
    }
    public function getBodyAttribute($value){
        $user = User::find(1);
        $username = $user->name;
        return $value."<br> from $username";
    }
}
