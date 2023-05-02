<?php

use core\Container;
use core\Database;
use core\App;

$container  = new Container();


App::setContainer($container); 

App::bind('core\Database', function (){
    $config = require base_path("config.php");
    return new Database($config['database'] );
} );


// 