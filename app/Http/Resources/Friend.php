<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;


class Friend extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'confirmed_at' => optional($this->confirmed_at)->diffForHumans(), //optional is used for the fields which are nullable
            'user_id' => $this->user_id,
            'friend_id' => $this->friend_id,
            'path' => '/users/'.$this->friend_id
        ];
    }
}
