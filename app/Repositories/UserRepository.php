<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;


class UserRepository implements IUserRepository
{
    public function getAll()
    {
        return User::with([
            'posts:id,user_id,category_id,title,slug',
            'posts.category:id,name,slug',
            'posts.tags:id,name,slug',
            'comments.post:id,title,slug',
            'likes.post:id,title,slug'
        ])
            ->withCount(['posts', 'comments', 'likes'])
            ->latest()
            ->get();
    }
    public function findById(int $id): ?User
    {
        return User::whereId($id)->first();
    }
}