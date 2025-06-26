<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutocompletionResource extends JsonResource
{
    public function toArray($data)
    {
        return [
            'users' => $this->resource->users,
            'blogs' => $this->resource->blogs,
        ];
    }
}
