<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutocompleteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'suggestion' => $this['suggestion'] ?? $this
        ];
    }
}