<?php
namespace core;

class Router{
    protected $routes ;

    public function GET($uri, $controller){
        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> 'GET',
        ];
    }
    public function POST($uri, $controller){
        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> 'POST',
        ];
    }
    public function DELETE($uri, $controller){
        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> 'DELETE',
        ];
    }
    public function PUT($uri, $controller){
        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=>'PUT',
        ];
    }
    public function PATCH($uri, $controller){
        $this->routes[]=[
            'uri'=> $uri,
            'controller'=> $controller,
            'method'=> 'PATCH',
        ];
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



