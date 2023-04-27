<?php
$heading = "create";
$config = require "config.php";
require "Validate.php";
$db = new Database($config['database'] );

$err = [];

if ($_SERVER['REQUEST_METHOD']==='POST'){
   
    $body = $_POST['body'];
    $id = 3;

    if (! Validate::string($body, 1, 1000)){
        $err['body'] = "A body of no more than 1000 characters is required";
    }

    if (empty(($err))){

        $notes = $db->query('INSERT INTO notes (notes, user_id) VALUES (?, ?)',[
            $body,$id
         ]); 
    }
     
}
require "views/note-create.view.php";