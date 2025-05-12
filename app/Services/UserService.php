<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;

class UserService {
    
    private IUserRepository $userRepo;

    public function __construct(IUserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function findById(int $id): ?User
    {
        return $this->userRepo->findById($id);
    }

}