<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface IUserRepository 
{
    public function getAll();
    public function findById(int $id) : ?User;
    public function findByIds(array $id) : ?array;

    public function searchIdsInManticore(string $query) : array;

}