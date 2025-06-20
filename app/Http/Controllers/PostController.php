<?php

namespace App\Http\Controllers;

use App\DTOs\CommentDTO;
use App\DTOs\LikeDTO;
use App\DTOs\PostDTO;
use App\Events\NewBlog;
use App\Events\NewPost;
use App\Helpers\ResponseHelper;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\LikeRequest;
use App\Http\Requests\PostRequest;
use App\Models\Comment;
use App\Models\User;
use App\Services\LemmatizerService;
use App\Services\PostService;
use Auth;

/** 
 * @authenticated
 */
class PostController extends Controller
{
    private PostService $postService;
    private LemmatizerService $lemmatizerService;

    public function __construct(PostService $postService, LemmatizerService $lemmatizerService)
    {
        $this->postService = $postService;
        $this->lemmatizerService = $lemmatizerService;
    }

    /** 
    * @unauthenticated
    */
    public function index()
    {
        $page = request('page', 1);

        $posts = $this->postService->getPosts((int)$page);
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

        // event(new NewPost($post));

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

    public function getAllTags()
    {
        return ResponseHelper::success($this->postService->getAllTags());
    }

    public function autocomplete(string $text)
    {
        $recommends = $this->postService->recommends($text);

        return ResponseHelper::success($recommends);
    }

    public function comments(int $post_id)
    {
        $user_id = Auth::user()->id;

        return ResponseHelper::success($this->postService->comments($post_id, $user_id));
    }

    public function deleteComment(int $comment_id)
    {
        /** @var Comment $comment */
        $comment = Comment::find($comment_id);        

        if($comment->user_id !== Auth::user()->id) return ResponseHelper::success([], "Nemate dozvolu da obrisete ovaj komentar!", 403);
        
        $id = $this->postService->deleteComment($comment_id);
        return ResponseHelper::success($id);
    }

    /**
     * @unauthenticated
    * @queryParam text string Optional. Search text for blog titles. Example: laravel
     */
    public function blogs()
    {
        $title = request()->query('text', '');
        if (empty($title)) {
            return ResponseHelper::error("Search text is required", 400);
        }
        $title = $this->lemmatizerService->lemmatize($title);
        $blogs = $this->postService->searchedBlogsByTitle($title);
        return ResponseHelper::success($blogs);
    }

    /**
     * Get all blog categories.
     *
     * Retrieves a list of all available categories for blogs.
     *
     * @response 200 {
     *   "success": true,
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Technology"
     *     },
     *     {
     *       "id": 2,
     *       "name": "Lifestyle"
     *     }
     *   ]
     * }
     *
     * @unauthenticated
     *
     * @return \Illuminate\Http\JsonResponse List of categories.
     */
    public function getAllCategories()
    {
        return ResponseHelper::success($this->postService->getAllCategories());
    }
}