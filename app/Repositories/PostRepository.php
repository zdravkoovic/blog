<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Tag;
use App\Repositories\Interfaces\IPostRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class PostRepository implements IPostRepository
{
    public function getAll()
    {
        return Post::with([
            'category:id,name,slug',
            'tags:id,name,slug',
            'author:id,name,email',
            'comments.user:id,name',
            'likes.user:id,name'
        ])
            ->withCount(['comments', 'likes'])
            ->latest()
            ->paginate(10);
    }

    public function getAllWithAuthors()
    {
        return Post::with(
            'author:id,name',
            'tags:id,name,slug',
        )
            ->withCount(['comments', 'likes'])
            ->latest()
            ->get();
    }

    public function getAllWithAuthorsAndAvatars() : \Illuminate\Pagination\LengthAwarePaginator
    {
        return Post::with(
            'category:id,name',
            'tags:id,name,slug',
            'author:id,name,avatar',
            'comments:id,post_id,user_id,content',
            'likes:id,user_id,post_id',
            'savedByUsers:id'
        )
            ->latest()
            ->withCount(['comments', 'likes'])
            ->paginate(30);
    }

    public function findById(int $id): ?Post
    {
        return Post::with([
            'category:id,name',
            'tags:id,name,slug',
            'author:id,name,email',
            'comments:id,post_id,user_id,content',
        ])
            ->withCount(['comments', 'likes'])
            ->findOrFail($id);
            // ->get(['id', 'title', 'content', 'user_id']);
    }

    public function findByIds(array $ids): Collection
    {
        return Post::with([
            'category:id,name,slug',
            'tags:id,name,slug',
            'author:id,name,avatar',
        ])
        ->whereIn('id', collect($ids)->flatten()->toArray())
        ->orderBy('created_at', 'desc')
        ->withCount(['comments', 'likes'])
        ->get();
    }

    public function create(array $data): Post
    {
        /**@var \App\Models\Post $post */
        $post = Post::create($data);
        if(!empty($data['tag_ids_real'])){
            $tagData = [];
            foreach($data['tag_ids_real'] as $tagId){
                $tagData[$tagId] = ['tagged_by_user_id' => $data['user_id']];
            }
            $post->tags()->attach($tagData);
        }
        return $post->load([
            'category:id,name,slug',
            'tags:id,name,slug',
            'author:id,name,email,avatar'
        ])
        ->loadCount(['comments', 'likes']);
    }
    public function commentPost(array $data): array
    {
        /**@var \App\Models\Comment $comment */
        $comment = Comment::create($data)
            ->load('user:id,name,avatar');

        return [
            'id' => $comment->id,
            'content' => $comment->content,         
            'updated_at' => $comment->updated_at,
            'user_nickname' => $comment->user->name,
            'user_avatar_path' => $comment->user->avatar_url,
            'user_can_modify' => true
        ];
    }
    
    public function like1unlike(int $postId, int $userId): string
    {
        $like = Like::query()->where('post_id', $postId)
            ->where('user_id', $userId)
            ->first();
        
        if($like){
            $like->delete();
            return -1;
        }

        Like::create([
            'post_id' => $postId,
            'user_id' => $userId
        ]);
        
        return 1;
    }

    public function getAllTags(): Collection
    {
        return Tag::all();
    }

    public function createTag(array $data): Tag
    {
        /**@var \App\Models\Tag $tag */
        $tag = Tag::create($data);

        return $tag->load([]);
    }

    /**
     * @param string[] $slugs
     * @return string[]
     */
    public function getIdsOfTags(array $slugs): array
    {
        return Tag::whereIn('slug', $slugs)->pluck('id')->toArray();
    }


    public function autocomplete(string $text): array
    {
        // Implement the method or return an empty array for now
        return [];
    }

    public function getComments(int $post_id, int $userId): array
    {

        $comments = Comment::with('user:id,name,avatar')
                        ->where('post_id', $post_id)
                        ->orderBy('updated_at', 'desc')
                        ->get()
                        ->map(function ($comment) use ($userId) {
                            return [
                                'id' => $comment->id,
                                'content' => $comment->content,
                                'updated_at' => $comment->updated_at,
                                'user_can_modify' => $comment->user->id === $userId,
                                'user_nickname' => $comment->user->name,
                                'user_avatar_path' => $comment->user->avatar_url
                            ];
                        })->toArray();
        
        return $comments;
    }

    public function searchIdsInManticore(string $title): array
    {
        // Implement the method or leave as an empty array for now
        return [];
    }

    public function getAllCategories(): Collection
    {
        return Category::orderByRaw("name = 'Saved' DESC")
            ->orderBy('name')
            ->get();
    }

    public function save1unsave(int $post_id, int $user_id): bool
    {
        $post = Post::findOrFail($post_id);

        $result = $post->savedByUsers()->toggle([$user_id]);

        return count($result['attached']) > 0;
    }

    public function savedBlogs(int $user_id) : LengthAwarePaginator
    {
        return Post::whereHas('savedByUsers', function ($query) use ($user_id) {
            $query->where('users.id', $user_id);
        })
        ->with([
            'category:id,name,slug',
            'tags:id,name,slug',
            'author:id,name,avatar',
            'comments.user:id,name',
            'likes.user:id,name',
            'savedByUsers:id'
        ])
        ->paginate(30);
    }

    public function searchByCategory(int $categoryId) : LengthAwarePaginator
    {
        return Post::whereCategoryId($categoryId)
            ->with([
                'category:id,name,slug',
                'tags:id,name,slug',
                'author:id,name,email',
                'comments.user:id,name',
                'likes.user:id,name',
                'savedByUsers:id'
            ])
            ->paginate(30);
    }
}