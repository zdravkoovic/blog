<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Str;

class BlogCompactResource extends JsonResource
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
            'content' => Str::limit(strip_tags($this->content), 50),
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'author' => [
                'name' => $this->author->name,
                'avatar_url' => $this->author->avatar_url,
            ],
            'tags' => $this->whenLoaded('tags', function () {
                return [
                    'ids' => $this->tags->pluck('id')->all(),
                    'names' => $this->tags->pluck('name')->all(),
                    'slugs' => $this->tags->pluck('slug')->all(),
                ];
            }, []),
            'comments_count' => $this->comments_count,
            'likes_count' => $this->likes_count,
            'cover_image' => $this->cover_image_url ? null : null,
            'did_user_like' => $this->did_user_like,
            'did_user_save' => $this->did_user_save,
        ];
    }
}
