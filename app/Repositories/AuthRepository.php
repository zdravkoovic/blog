<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\IAuthRepository;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements IAuthRepository
{
    public function createUser(array $data): User
    {
        return User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function findUserByEmail(string $email): ?User
    {
        return User::query()->where('email', $email)->first();
    }
}