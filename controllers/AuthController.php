<?php

namespace app\controllers;

use app\core\Controller;

class AuthController extends Controller{

    public function register(){
        // code here ...
    }

    public function login(){

        $this->setLayout('auth');
        return $this->render('login');
    }
}