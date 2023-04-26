<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri)["path"];

$routes = [
    "/"=> "controllers/home.controller.php",
    "/notes"=> "controllers/notes.controller.php",
    "/note"=> "controllers/note.controller.php",
];

function abort($code = 404){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function setRout($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }
    else{
        abort();
    }
}

setRout($uri, $routes);