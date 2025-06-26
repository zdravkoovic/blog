<?php

namespace App\Services;

use Manticoresearch\Client;
use mysqli;

require_once __DIR__ . '/../../vendor/autoload.php';

class ManticoreService
{
    protected Client $client;
    protected mysqli $mysqli;

    public function __construct()
    {
        $config = ['host' => '127.0.0.1', 'port' => 9308];
        $this->client = new \Manticoresearch\Client($config);
        $this->mysqli = new mysqli('127.0.0.1', '', '', '', 9306);
    }

    public function getTable(string $table)
    {
        return $this->client->table($table);
    }

    public function mySQL() : mysqli
    {
        if ($this->mysqli->connect_error) {
            throw new \Exception("Connect error ({$this->mysqli->connect_errno}): {$this->mysqli->connect_error}");
        }
        return $this->mysqli;
    }

    public function getClient(): Client
    {
        return $this->client;
    }
}