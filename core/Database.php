<?php

namespace app\core;

use app\config\Config;
use PDO;

class Database{

    protected Config $config;
    public $pdo;

    public function connect(){
        $this->config->pdoArray();


        $this->pdo = new PDO($this->config->pdoArr['dsn'], $this->config->pdoArr['user'], $this->config->pdoArr['password']);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $this->pdo;

    }
}