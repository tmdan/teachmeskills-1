<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostCommentResource extends JsonResource
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
            'text' => $this->text,
            //'user_id' => $this->user_id,
            //'user' => UserResource::collection($this->author),
            'user' => $this->author,
            //'post_id' => $this->post_id,
            'is_publish' => $this->is_publish,
        ];
        /*
        */
    }
}
