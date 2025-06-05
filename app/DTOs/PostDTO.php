<?php

namespace App\DTOs;

class PostDTO
{
    /**
     * @var string[] $tagsIdRealOne
     */
    public array $tagsIdRealOne;
    /**
     * @param string[] $tagsId
     */
    public function __construct(
        public int $userId,
        public string $title,
        public string $slug,
        public string $content,
        public int $categoryId,
        public array $tagsId
    ){}

    public static function formRequest(array $data, int $userId): self
    {
        return new self(
            $userId,
            $data['title'],
            $data['slug'],
            $data['content'],
            $data['category_id'],
            $data['tag_ids']
        );
    }

    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'category_id' => $this->categoryId,
            'tag_ids' => $this->tagsId,
            'tag_ids_real' => $this->tagsIdRealOne
        ];
    }
}