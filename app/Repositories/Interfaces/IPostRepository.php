<?php

namespace App\Repositories\Interfaces;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

interface IPostRepository
{
    public function getAll();
    public function getAllWithAuthors();
    public function getAllWithAuthorsAndAvatars();
    public function findById(int $id): ?Post;
    public function create(array $data): Post;
    public function commentPost(array $data): Comment;
    public function likePost(int $postId, int $userId): string;

    public function getAllTags(): Collection;
    public function createTag(array $data): Tag;
    public function getIdsOfTags(array $slugs): array;
}