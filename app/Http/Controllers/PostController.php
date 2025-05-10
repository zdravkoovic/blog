<?php

namespace App\Http\Controllers;

use App\DTOs\PostDTO;
use App\Helpers\ResponseHelper;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\LikeRequest;
use App\Http\Requests\PostRequest;
use App\Services\PostService;

class PostController extends Controller
{
    private PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getPosts();
        return ResponseHelper::success($posts);
    }

    public function show($id)
    {
        $post = $this->postService->getPostById($id);
        return $post ? ResponseHelper::success($post) : ResponseHelper::error("Post not found", 404); 
    }

    public function store(PostRequest $request)
    {
        $validated = $request->validated();
        $userId = $request->user()->id;

        $postDTO = PostDTO::formRequest($validated, $userId);
        $post = $this->postService->createPost($postDTO);

        return $post ? ResponseHelper::success($post) : ResponseHelper::error(status: 500, errors: $post);
    }

    public function comment(CommentRequest $request)
    {

    }

    public function like(LikeRequest $request)
    {

    }
}