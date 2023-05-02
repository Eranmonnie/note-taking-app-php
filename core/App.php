<?php

namespace core;
class App{
        
    protected static $container ;

    public static function setContainer($data){
        static::$container = $data;

    }

    public static function getContainer(){
        return static:: $container;
    }
    public static function bind($key , $func){

        static::getContainer()->bind($key , $func);
    }

    public static function resolve($data){
       return static:: $container->resolve($data);
    }
    

}