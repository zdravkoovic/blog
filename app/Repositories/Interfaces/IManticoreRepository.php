<?php

namespace App\Repositories\Interfaces;

use App\Services\ManticoreService;
use Manticoresearch;

interface IManticoreRepository
{
    /**
     * Get the Manticore table instance.
     *
     * @param string $table
     * @return \Manticoresearch\Table
     */
    public function getTable(string $table);

    /**
     * Search in the Manticore index.
     *
     * @param string $index
     * @param string $query
     * @return array
     */
    public function search(string $index, string $query): Manticoresearch\ResultSet;

    /**
     * Get the Manticore client instance.
     *
     * @return \Manticoresearch\Client
     */
    public function getClient();

    public function autocomplete(string $index, string $field, string $prefix, int $limit = 10): array;

    public
     function searchBlogTitles(string $query): Manticoresearch\ResultSet;
}