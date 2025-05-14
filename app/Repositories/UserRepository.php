<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;


class UserRepository implements IUserRepository
{
    public function getAll()
    {
        return User::with([])
            ->withCount(['posts'])
            ->latest()
            ->get()
            ->map(function ($user) {
                $user->avatar = $user->avatar 
                    ? asset($user->avatar)
                    : null;
                return $user;
            });
    }
    public function findById(int $id): ?User
    {
        return User::whereId($id)->withCount(['posts'])->first();
    }
}