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

    public function login(AuthDTO $authDTO) : array
    {
        $user = $this->authRepos->findUserByEmail($authDTO->email);

        if(! $user || ! Hash::check($authDTO->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.']
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return [
            'user' => $user,
            'token' => $token
        ];
    }

    public function logout(User $user) : void
    {
        $user->currentAccessToken()?->delete;
    }
}