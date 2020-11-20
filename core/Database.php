<?php

namespace app\core;

use PDO;

class Database{

    public \PDO $pdo;

    public function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $user = $config['user'] ?? '';
        $password = $config['password'] ?? '';
        $this->pdo = new \PDO($dsn, $user, $password);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
        return $this->pdo;
    }

    public function applyMigrations(){
        // code here...
    }

    public function createMigrationsTable(){
        // code here...
    }

    public function getAppliedMigrations(){
        // code here...
    }




}