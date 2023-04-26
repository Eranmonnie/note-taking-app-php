<?php
$heading = "create";
$config = require "config.php";
$db = new Database($config['database'] );

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $body = $_POST['body'];
    $id = 3;
    $notes = $db->query('INSERT INTO notes (notes, user_id) VALUES (?, ?)',[
       $body,$id
    ]);  
}
require "views/note-create.view.php";