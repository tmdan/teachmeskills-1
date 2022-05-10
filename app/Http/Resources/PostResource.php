<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class PostResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'category_id' => $this->category_id,
            'user' => new UserResource($this->user),
            'is_publish' => $this->is_publish,
            'is_recommended' => $this->is_recommended,
            'views' => $this->views,
            'image' => Storage::url($this->image),
            'tags' => TagResource::collection($this->tags)
        ];
    }
}
