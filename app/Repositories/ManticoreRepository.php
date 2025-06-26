<?php

namespace App\Repositories;

use App\Repositories\Interfaces\IManticoreRepository;
use App\Services\ManticoreService;
use Illuminate\Database\Capsule\Manager;
use Manticoresearch;
use mysqli;

class ManticoreRepository implements IManticoreRepository
{
    protected ManticoreService $manticoreService;

    public function __construct(ManticoreService $manticoreService)
    {
        $this->manticoreService = $manticoreService;
    }

    public function getTable(string $table)
    {
        return $this->manticoreService->getTable($table);
    }

    public function search(string $index, string $query): Manticoresearch\ResultSet
    {
        return $this->getTable($index)->search($query)->get();
    }

    public function getClient()
    {
        return $this->manticoreService->getClient();
    }

    public function autocomplete(string $index, string $field, string $prefix, int $limit = 10): array
    {
        // Establish a connection to Manticore via MySQL protocol
        $mysqli = $this->manticoreService->mySQL();

        // Escape input parameters to prevent SQL injection
        $escapedPrefix = $mysqli->real_escape_string($prefix);
        $escapedIndex = $mysqli->real_escape_string($index);
        $escapedField = $mysqli->real_escape_string($field);

        // Prepare and execute the autocomplete query
        $query = sprintf(
            "CALL AUTOCOMPLETE('^\"{$prefix}*\"', '{$index}')",
        );
        $result = $mysqli->query($query);

        // Collect autocomplete results
        $autocomplete = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
            $autocomplete[] = $row;
            }
            $result->close();
        }

        $mysqli->close();

        return $autocomplete;
    }

    public function searchBlogTitles(string $query): Manticoresearch\ResultSet
    {
        $results = $this->getTable('posts')->search($query)->get();
        // $ids = [];
        // foreach ($results as $result) {
        //     if (isset($result['id'])) {
        //     $ids[] = $result['id'];
        //     }
        // }
        return $results;
    }
}