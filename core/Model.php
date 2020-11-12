<?php

namespace app\core;

class Model{
    
    public function loadData($data){
        foreach ($data as $key => $value) {
            if(property_exists($this, $key)){
                $this->{$key} = $value;
            }
        }
    }

    public function create(){
        // code here ... 
        
    }

    public function read(){
        // code here ...
    }

    public function readSingle(){
        // code here ...
    }

    public function update(){
        // code here ...
    }

    public function deleteOne(){
        // code here ...
    }

}