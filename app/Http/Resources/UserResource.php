<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'avatar' => Storage::url( $this->avatar),
            'email' => $this->email,
        ];
    }
}
