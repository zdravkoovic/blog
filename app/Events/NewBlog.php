<?php

namespace App\Events;

use App\DTOs\PostDTO;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class NewBlog implements ShouldBroadcastNow
{
    /**
     * @var \App\Models\Post
     */
    public $blog;

    public function __construct(PostDTO $blog)
    {
        $this->blog = $blog;
    }

    public function broadcastOn()
    {
        return ['blogs'];
    }

    public function broadcastWith()
    {
        return $this->blog->toArray();
    }
}