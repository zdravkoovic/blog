<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogFullResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'lemma_title' => $this->lemma_title,
            'likes_count' => $this->likes_count,
            'comments_count' => $this->comments_count,
            // 'category' => new CategoryResource($this->whenLoaded('category')),
            // 'tags' => TagResource::collection($this->whenLoaded('tags')),
            'author' => [
                'id' => $this->author->id,
                'name' => $this->author->name,
                'avatar_url' => $this->author->avatar_url,
            ],
        ];
    }
}
