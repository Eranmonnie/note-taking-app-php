<?php
 
const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "core/functions.php";

spl_autoload_register(function($class){

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path ( $class . ".php");
});

require base_path("core/Router.php");


$Router = new core\Router();

require base_path("routes.php");

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri)["path"];

$method = $_POST['__method'] ?? $_SERVER['REQUEST_METHOD'];

$Router->route($uri, $method);