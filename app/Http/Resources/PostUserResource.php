<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostUserResource extends JsonResource
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
            //'id' => $this->id,
            //'name' => $this->name,
           // 'email' => $this->email,
           // 'avatar' => $this->avatar,
           // 'is_admin' => $this->is_admin,
           // 'status' => $this->status,
        ];
    }
}
