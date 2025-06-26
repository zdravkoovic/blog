<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepository;
use RomanStruk\ManticoreScoutEngine\Mysql\Builder;

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

    public function findByIds(array $ids): ?array
    {
        return User::whereIn('id', $ids)
            ->limit(10)
            ->get()
            ->toArray();
    }

    public function searchIdsInManticore(string $query): array
    {
        return User::search('^'.$query, function (Builder $builder) {
            return $builder->select(['id'])
                ->inWeightOrder('asc');
        })->get()->pluck('id')->toArray();
    }
}