<?php

namespace App\DTOs;

use App\Models\Post;

class PaginateBlogsDTO 
{
    public function __construct(
        public Post $blog,
        public bool $didUserLike
    ){}

    public static function from(Post $blog, int $userId) : self
    {
        $liked = $blog->likes->contains('user_id', $userId);

        return new self($blog, $liked);
    }
}