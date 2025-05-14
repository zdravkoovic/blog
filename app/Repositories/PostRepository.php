<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Repositories\Interfaces\IPostRepository;

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
            ->get();
    }

    public function getAllWithAuthors()
    {
        return Post::with('author:id,name')
            ->latest()
            ->get();
    }

    public function getAllWithAuthorsAndAvatars()
    {
        return Post::with('author:id,name,avatar')
            ->latest()
            ->get()
            ->map(function ($post) {
                $post->author->avatar = $post->author->avatar
                    ? asset($post->author->avatar)
                    : null;
                return $post;
            });
    }

    public function findById(int $id): ?Post
    {
        return Post::with([
            'category:id,name,slug',
            'tags:id,name,slug',
            'author:id,name,email',
            'comments.user:id,name',
            'likes.user:id,name'
        ])
            ->withCount(['comments', 'likes'])
            ->findOrFail($id);
    }
    public function create(array $data): Post
    {
        /**@var \App\Models\Post $post */
        $post = Post::create($data);
        if(!empty($data['tag_ids'])){
            $tagData = [];
            foreach($data['tag_ids'] as $tagId){
                $tagData[$tagId] = ['tagged_by_user_id' => $data['user_id']];
            }
            $post->tags()->attach($tagData);
        }
        return $post->load([
            'category:id,name,slug',
            'tags:id,name,slug',
            'author:id,name,email'
        ]);
    }
    public function commentPost(array $data): Comment
    {
        /**@var \App\Models\Comment $comment */
        $comment = Comment::create($data);

        return $comment->load('user:id,name');
    }
    
    public function likePost(int $postId, int $userId): string
    {
        $like = Like::query()->where('post_id', $postId)
            ->where('user_id', $userId)
            ->first();
        
        if($like){
            $like->delete();
            return 'unliked';
        }

        Like::create([
            'post_id' => $postId,
            'user_id' => $userId
        ]);
        
        return 'liked';
    }
}