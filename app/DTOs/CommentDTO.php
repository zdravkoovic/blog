<?php

namespace App\DTOs;

class CommentDTO
{
    public function __construct(
        public string $content,
        public int $postId,
        public int $userId
    ){}

    public function fromRequest(array $data, int $userId): self
    {
        return new self(
            $userId,
            $data['post_id'],
            $data['content']
        );
    }

    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'post_id' => $this->postId,
            'content' => $this->content
        ];
    }
}