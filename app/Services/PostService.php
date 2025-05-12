<?php

namespace App\Services;

use App\DTOs\CommentDTO;
use App\DTOs\LikeDTO;
use App\DTOs\PostDTO;
use App\Repositories\Interfaces\IPostRepository;

class PostService {
    private IPostRepository $postRepo;

    public function __construct(IPostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function getPosts()
    {
        return $this->postRepo->getAllWithAuthors();
    }

    public function getPostById(int $id){
        return $this->postRepo->findById($id);
    }

    public function createPost(PostDTO $postDTO){
        return $this->postRepo->create($postDTO->toArray());
    }

    public function commentPost(CommentDTO $commentDTO){
        return $this->postRepo->commentPost($commentDTO->toArray());
    }

    public function toggleLikePost(LikeDTO $likeDTO)
    {
        return $this->postRepo->likePost($likeDTO->postId, $likeDTO->userId);
    }
}