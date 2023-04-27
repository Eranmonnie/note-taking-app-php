<?php
$heading = "create";
$config = require "config.php";
$db = new Database($config['database'] );

$err = [];

if ($_SERVER['REQUEST_METHOD']==='POST'){
   
    $body = $_POST['body'];
    $id = 3;

    if (strlen($body) === 0){
        $err['body'] = "A body is required";
    }

    if (strlen($body) > 1000){
        $err['body'] = "The body cannot be more than 1000 characters";
    }


    if (empty(($err))){

        $notes = $db->query('INSERT INTO notes (notes, user_id) VALUES (?, ?)',[
            $body,$id
         ]); 
    }
     
}
require "views/note-create.view.php";