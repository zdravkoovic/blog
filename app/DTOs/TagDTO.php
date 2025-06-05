<?php

namespace App\DTOs;


class TagDTO
{
    public function __construct(
        public int $userId,
        public string $name,
        public string $slug
    ){}

    public static function formRequest(array $data, string $userId): self
    {
        return new self(
            $userId,
            $data['name'],
            $data['slug'],
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug
        ];
    }

}