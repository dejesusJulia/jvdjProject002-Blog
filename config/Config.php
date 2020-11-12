<?php

namespace app\config;

class Config{

    private const DB_HOST = 'localhost';
    private const DB_PORT = '3306';
    private const DB_NAME = 'jvdjblogDb';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '@localhost';

    public array $pdoArr = [];

    public function pdoArray(){
        
        $pdoArr = [
            "dsn" => 'mysql:host=' . self::DB_HOST . ';port=' . self::DB_PORT . ';dbname=' . self::DB_NAME,
            'user' => self::DB_USER,
            'password' => self::DB_PASSWORD
        ];

        $this->pdoArr = $pdoArr;
    }
    

}