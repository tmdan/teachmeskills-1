<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'is_publish' => $this->is_publish,
            'is_recommended' => $this->is_recommended,
            'views' => $this->views,
            'image' => $this->image,
            'date' => $this->date,
            //'author' => PostUserResource::collection($this->author) ,
            'author' => $this->author,
            //'author' => PostAuthorResource::collection($this->author),
            'category' => $this->category,
            'comments' => PostCommentResource::collection($this->comments) ,
        ];
        /*
            "slug": "slag_posta_1",
            "category_id": 1,
            "user_id": 1,
            "date": "22/05/22",
        */
    }
}
