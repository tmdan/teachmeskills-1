<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    use HasFactory;

        public function post()
        {
            return $this->hasOne(Post::class);
        }

            public function author()
            {
                return $this->hasOne(User::class);
            }

            public function published()
            {
                $this->is_publish = 1;
                $this->save();
            }

            public function unpublished()
            {
                $this->is_publish = 0;
                $this->save();
            }

            public function togglePublished($value)
            {
                if ($value == null) {
                    return $this->unpublished();
                }
                return $this->published();
            }

            public function scopePublished($query)
            {
                return $query->where('is_publish', 1);
            }

            public function scopeUnpublished($query)
            {
                return $query->where('is_publish', 0);
            }
        }
