<?php
function abort($code = Response::NOT_FOUND){
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function setRout($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require base_path($routes[$uri]);
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

function base_path($value){
    return BASE_PATH. $value;

}

function view($value, $content = []){
    extract($content);
    require base_path('views/'. $value);
}