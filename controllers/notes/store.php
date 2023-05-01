<?php

$heading = "create";
//allows us touse coe\Database
use core\Database;
use core\Validate;


$config = require base_path("config.php");
require base_path("core/Validate.php");
$db = new Database($config['database'] );

$err = [];

   
$body = $_POST['body'];
$id = 3;

if (! Validate::string($body, 1, 1000)){
    $err['body'] = "A body of no more than 1000 characters is required";
}

if (! empty(($err))){
    return view("notes/create.view.php", [
        "heading" => $heading,
        "err" =>$err,
    ]);//loads views 
    
}

$notes = $db->query('INSERT INTO notes (notes, user_id) VALUES (?, ?)',[
    $body,$id
    ]); 
 header('location: /notes');
exit();