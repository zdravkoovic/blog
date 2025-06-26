<?php

namespace App\DTOs;

class AutocompleteResponseDTO
{
    /**
     * @var array AutocompleteUserDTO[]
     */
    public array $users;
    /**
     * @var array AutocompleteBlogDTO[]
     */
    public array $blogs;

    public function __construct(array $users, array $blogs
    ) {
        $this->users = $users;
        $this->blogs = $blogs;
    }

    public function toArray(): array
    {
        return [
            'users' => $this->users,
            'blogs' => $this->blogs,
        ];
    }
}