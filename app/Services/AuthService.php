<?php

namespace App\Services;

use App\DTOs\AuthDTO;
use App\Models\User;
use App\Repositories\Interfaces\IAuthRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    private IAuthRepository $authRepos;

    public function __construct(IAuthRepository $authRepos)
    {
        $this->authRepos = $authRepos;
    }

    public function register(AuthDTO $authDTO) : array
    {
        $user = $this->authRepos->createUser($authDTO->toArray());

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function login(AuthDTO $authDTO) : array|null
    {
        $user = $this->authRepos->findUserByEmail($authDTO->email);

        // validacioni servis/sloj/validator
        if(! $user || ! Hash::check($authDTO->password, $user->password)){
            return null;
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->avatar ? asset($user->avatar) : null
            ],
            'token' => $token
        ];
    }

    public function logout(User $user) : void
    {
        $user->currentAccessToken()?->delete;
    }
}