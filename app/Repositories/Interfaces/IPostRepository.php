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
    public function getAllWithAuthorsAndAvatars() : \Illuminate\Pagination\LengthAwarePaginator;
    public function findById(int $id): ?Post;
    public function findByIds(array $ids): Collection;
    public function create(array $data): Post;
    public function commentPost(array $data): array;
    public function likePost(int $postId, int $userId): string;

    /** @return Comment[] */
    public function getComments(int $postId, int $userId): array;

    public function getAllTags(): Collection;
    public function createTag(array $data): Tag;
    public function getIdsOfTags(array $slugs): array;

    public function autocomplete(string $text): array;
    public function searchIdsInManticore(string $title) : array;

    public function getAllCategories(): Collection;
}