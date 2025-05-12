<?php

namespace App\Http\Controllers;

use App\DTOs\CommentDTO;
use App\DTOs\LikeDTO;
use App\DTOs\PostDTO;
use App\Helpers\ResponseHelper;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\LikeRequest;
use App\Http\Requests\PostRequest;
use App\Services\PostService;

/** 
 * @authenticated
 */
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
        $validated = $request->validated();
        $userId = $request->user()->id;

        $commentDTO = CommentDTO::formRequest($validated, $userId);
        $comment = $this->postService->commentPost($commentDTO);
        
        return $comment ? ResponseHelper::success($comment) : ResponseHelper::error(status: 500, errors: $comment);
    }

    public function like(LikeRequest $request)
    {
        $validated = $request->validated();
        $userId = $request->user()->id;

        $likeDTO = LikeDTO::fromRequest($userId, $validated['post_id']);
        $like = $this->postService->toggleLikePost($likeDTO);

        return $like ? ResponseHelper::success($like) : ResponseHelper::error(status: 500, errors: $like);
    }
}