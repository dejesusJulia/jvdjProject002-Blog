<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model{

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function register(){
        echo 'Registration successful';
    }

    public function rules(): array{
        return [
            'name' => [self::RULE_REQUIRED], 
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL], 
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]], 
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']], 
        ];
    }
}