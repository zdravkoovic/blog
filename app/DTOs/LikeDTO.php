<?php

namespace App\DTOs;

class LikeDTO
{
    public function __construct(
        public int $userId,
        public int $postId
    ){}

    public function fromRequest(int $userId, int $postId): self
    {
        return new self(
            $userId,
            $postId
        );
    }

    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'post_id' => $this->postId
        ];
    }
}