<?php

namespace core;
class Container{
    
    public $contain = [];
    public function bind($key , $func){

        $this->contain[$key] = $func;

    }

    public function resolve($key){

        if(!array_key_exists($key, $this->contain)){

         throw new \Exception("could not find matching data for ${$key}");
        }

        $resolver =  $this->contain[$key];

        return call_user_func($resolver);

    }
} 