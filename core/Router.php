<?php
namespace core;

class Router{
    protected $routes ;

    public function add($uri, $controller , $method){
        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> $method,
        ];
    }
    public function GET($uri, $controller){
         $this->add($uri, $controller, 'GET');
    }
    public function POST($uri, $controller){
        $this->add($uri, $controller, 'POST');
    }
    public function DELETE($uri, $controller){
        $this->add($uri, $controller, "DELETE");
    }
    public function PUT($uri, $controller){
        $this->add($uri, $controller, 'PUT');
    }
    public function PATCH($uri, $controller){
        $this->add($uri, $controller, 'PATCH');
    }

public function route($uri, $method){

    foreach($this->routes as $routes){
        if ($routes['uri'] === $uri && $routes['method'] === strtoupper($method)){
            return require base_path($routes['controller']);
        }
    }
    abort();
}
}



