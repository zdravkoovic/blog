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
            ->get();
    }
    public function findById(int $id): ?User
    {
        return User::whereId($id)->withCount(['posts'])->first();
    }
}