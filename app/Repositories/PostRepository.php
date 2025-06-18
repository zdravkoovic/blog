<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Tag;
use App\Repositories\Interfaces\IPostRepository;
use DB;
use Illuminate\Database\Eloquent\Collection;
use RomanStruk\ManticoreScoutEngine\Mysql\Builder;

use function PHPSTORM_META\map;

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

    public function getAllWithAuthorsAndAvatars()
    {
        return Post::with(
            'category:id,name',
            'tags:id,name,slug',
            'author:id,name,avatar',
            'comments:id,post_id,user_id,content',
        )
            ->latest()
            ->withCount(['comments', 'likes'])
            ->paginate(30)
            ->jsonSerialize();
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

    public function findByIds(array $ids): array
    {
        return Post::with([
            'category:id,name,slug',
            'tags:id,name,slug',
            'author:id,name,avatar',
        ])
        ->whereIn('id', collect($ids)->flatten()->toArray())
        ->orderBy('created_at', 'desc')
        ->withCount(['comments', 'likes'])
        ->get()
        ->toArray();
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


    public function autocomplete(string $text) : array
    {
        $recommends = Post::search($text.'*', function (Builder $builder) {
            return $builder->autocomplete(['"', '^'])->highlight()->select(['title']);

        })->raw();
        


        return $recommends;
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

    public function IdsOfBlogsSearchedByTitle(string $title) : array
    {
        $ids = Post::search($title . '*', function (Builder $builder) use ($title) {
            return $builder
            ->select(['id']);
        })->get()->pluck('id')->toArray();
        return $ids;
    }

    public function getAllCategories(): Collection
    {
        return Category::all();
    }
}