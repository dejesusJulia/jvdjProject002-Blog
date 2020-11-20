<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\LoginModel;
use app\models\RegisterModel;

class AuthController extends Controller{

    public function register(){
        $this->setLayout('auth');
        return $this->render('register');
    }

    public function login(){

        $this->setLayout('auth');
        return $this->render('login');
    }

    public function handleRegister(Request $request){
        $registerModel = new RegisterModel();

        if($request->isPost()){
            $registerModel->loadData($request->getBody());

            // the line below is modified. Still no database
            if($registerModel->validate()){
                return 'Success!';
            }

            return $this->render('register', ['model'=>$registerModel]);
        }

        $this->setLayout('auth');

        return $this->render('register', ['model' => $registerModel]);
    }

    public function handleLogin(Request $request){
        $loginModel = new LoginModel();

        if($request->isPost()){
            $loginModel->loadData($request->getBody());

            if($loginModel->validate()){
                return 'Success';
            }

            return $this->render('login', ['model' => $loginModel]);
        }

        $this->setLayout('auth');

        return $this->render('login', ['model' => $loginModel]);
    }
}