<?php
namespace core\middleware;
class Middleware{
const MAP =[
    'guest'=> Guest::class,
    'auth'=> Auth::class,
];

 public static function resolve($key){
    
    if ($key){

        $middleware =  Middleware::MAP[$key] ??false;

        if (! $middleware){
            
            throw \Exception("no matching middleware for key ${$key}");
        }

        (new $middleware)->handel();

     }
     else{
        return;
     }
 }

}

