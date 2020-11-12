<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class HomeController extends Controller{

    public function home(){
        
        return $this->render('home');
    }

    public function readAllPosts(){
        // code here ...
    }

    public function readSinglePost(){
        // code here ...
    }
}