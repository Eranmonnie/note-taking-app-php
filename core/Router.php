<?php
namespace core;
use core\middleware\Middleware;


class Router{
    protected $routes ;

    public function add($uri, $controller , $method){
        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> $method,
            'middleware'=> null,
        ];

        return $this;
    }
    public function GET($uri, $controller){
         return $this->add($uri, $controller, 'GET');
    }
    public function POST($uri, $controller){
       return  $this->add($uri, $controller, 'POST');
    }
    public function DELETE($uri, $controller){
        return $this->add($uri, $controller, "DELETE");
    }
    public function PUT($uri, $controller){
        return $this->add($uri, $controller, 'PUT');
    }
    public function PATCH($uri, $controller){
        return $this->add($uri, $controller, 'PATCH');
    }
    public function only($key){
        //when only is tacklled it appends to the last data put in the array
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

    }

public function route($uri, $method){

    foreach($this->routes as $routes){
        if ($routes['uri'] === $uri && $routes['method'] === strtoupper($method)){

            //check if middleware exists  
          
            Middleware::resolve($routes['middleware']);
               

            // if ($routes['middleware']=== 'auth'){
            //     (new Auth)->handel();
            // }

            // if ($routes['middleware']=== 'guest'){
            //     (new Guest)->handel();
            // }

            return require base_path("http/controllers/{$routes['controller']}");
        }
    }
    abort();
}
}



