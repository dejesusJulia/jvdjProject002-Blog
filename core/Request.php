<?php

namespace app\core;

class Request{
    
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '';
        $position = strpos($path, '?'); // get chars before ?

        // if GET variable does not exist
        if($position === false){
            return $path;
        }

        return substr($path, 0, $position); // returns from first char up to char before ?
    }

    /*
    returns lower case GET or POST
    */
    public function method(){
        return strtolower($_SERVER['REQUEST_METHOD']);  
    }

    /*
    returns GET
    */
    public function isGet(){

        return $this->method() === 'get';
        // if($this->method() === 'get'){
        //     return 'get';
        // }
    }

    /*
    returns POST
    */
    public function isPost(){
        if($this->method() === 'post'){
            return 'post';
        }
    }

    /*
    fetches input from forms
    */
    public function getBody(){
        $body = [];

        // GET
        if($this->method() === 'get'){

            foreach($_GET as $key => $value){
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }

        }

        // POST
        if($this->method() === 'post'){

            foreach($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;

    }














}