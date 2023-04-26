<?php
function abort($code = Response::NOT_FOUND){
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

function authorize($statement, $status = Response::FOBIDDEN){
    if (! $statement){
        abort($status);
    }
}