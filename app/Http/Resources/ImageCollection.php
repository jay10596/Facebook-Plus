<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ImageCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'image_count' => $this->count(),
            'links' => [
                'self' => '/images',
            ],
        ];
    }
}
