<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface IUserRepository 
{
    public function getAll();
    public function findById(int $id) : ?User;
}