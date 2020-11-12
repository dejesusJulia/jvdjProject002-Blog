<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class ContactsController extends Controller{

    public function contacts(){
        return $this->render('contacts');
    }

    public function handleContact(Request $request){
        $body = $request->getBody();

        echo '<pre>';
        var_dump($body);
        echo '</pre>';
    }


}