<?php
namespace core\middleware;
class Middleware{
const MAP =[
    'guest'=> Guest::class,
    'auth'=> Auth::class,
];

}

