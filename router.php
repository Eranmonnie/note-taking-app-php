<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri)["path"];

$routes = require ("core/routes.php");

setRout($uri, $routes);