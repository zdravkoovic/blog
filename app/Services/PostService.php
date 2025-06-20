<?php

namespace App\Services;

use App\DTOs\CommentDTO;
use App\DTOs\LikeDTO;
use App\DTOs\PostDTO;
use App\DTOs\TagDTO;
use App\Models\Post;
use App\Models\Tag;
use App\Repositories\Interfaces\ICommentRepository;
use App\Repositories\Interfaces\IPostRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class PostService {
    private IPostRepository $postRepo;
    private ICommentRepository $commentRepo;

    public function __construct(
        IPostRepository $postRepo,
        ICommentRepository $commentRepo
    )
    {
        $this->postRepo = $postRepo;
        $this->commentRepo = $commentRepo;
    }

    public function getPosts(int $page)
    {
        $cacheVersion = Cache::get('blog_cache_version', 1);
        $cacheKey = "blogs_page_{$page}_v{$cacheVersion}";

        return $this->postRepo->getAllWithAuthorsAndAvatars();
        $blogs = Cache::tags(['blogs'])->remember($cacheKey, now()->addMinutes(30), function () {
        });

        return $blogs;
    }

    public function getPostById(int $id){
        return $this->postRepo->findById($id);
    }

    public function createPost(PostDTO $postDTO){
        Cache::tags('blogs')->flush();
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

    public function recommends(string $text)
    {
        $recommends = $this->postRepo->autocomplete($text);

        return array_column($recommends, 'normalized');
    }

    public function comments(int $post_id, int $user_id)
    {
        $comment = $this->postRepo->getComments($post_id, $user_id);

        return $comment;
    }

    public function deleteComment(int $id) : int
    {
        return $this->commentRepo->delete($id);
    }


    public function searchedBlogsByTitle(string $title)
    {
        $ids = $this->postRepo->IdsOfBlogsSearchedByTitle($title);
        if (empty($ids)) {
            return [];
        }
        $blogs = $this->postRepo->findByIds($ids);
        return $blogs;
    }

    public function getAllCategories()
    {
        return $this->postRepo->getAllCategories();
    }
}