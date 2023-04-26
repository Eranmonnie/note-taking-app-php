<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri)["path"];

$routes = [
    "/"=> "controllers/home.controller.php",
    "/notes"=> "controllers/notes.controller.php",
    "/note"=> "controllers/note.controller.php",
];

setRout($uri, $routes);