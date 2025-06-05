<?php

namespace App\Services;

use App\DTOs\CommentDTO;
use App\DTOs\LikeDTO;
use App\DTOs\PostDTO;
use App\DTOs\TagDTO;
use App\Models\Post;
use App\Models\Tag;
use App\Repositories\Interfaces\IPostRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class PostService {
    private IPostRepository $postRepo;

    public function __construct(IPostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function getPosts(int $page)
    {
        $cacheVersion = Cache::get('blog_cache_version', 1);
        $cacheKey = "blogs_page_{$page}_v{$cacheVersion}";

        $blogs = Cache::tags(['blogs'])->remember($cacheKey, now()->addMinutes(30), function () {
            return $this->postRepo->getAllWithAuthorsAndAvatars();
        });

        return $blogs;
    }

    public function getPostById(int $id){
        return $this->postRepo->findById($id);
    }

    public function createPost(PostDTO $postDTO){
        $postDTO->tagsIdRealOne = $this->postRepo->getIdsOfTags($postDTO->tagsId);
        return $this->postRepo->create($postDTO->toArray());
    }

    public function commentPost(CommentDTO $commentDTO){
        return $this->postRepo->commentPost($commentDTO->toArray());
    }

    public function toggleLikePost(LikeDTO $likeDTO)
    {
        return $this->postRepo->likePost($likeDTO->postId, $likeDTO->userId);
    }

    public function getAllTags()
    {
        return $this->postRepo->getAllTags();
    }

    public function createTag(TagDTO $tagDTO)
    {
        $this->postRepo->createTag($tagDTO->toArray());
    }
}