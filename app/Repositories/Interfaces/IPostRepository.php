<?php

namespace App\Repositories\Interfaces;

use App\Models\Comment;
use App\Models\Post;

interface IPostRepository
{
    public function getAll();
    public function getAllWithAuthors();
    public function findById(int $id): ?Post;
    public function create(array $data): Post;
    public function commentPost(array $data): Comment;
    public function likePost(int $postId, int $userId): string;
}