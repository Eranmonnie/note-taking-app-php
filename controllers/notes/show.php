<?php

use core\Database;

$heading ="Note";
$config = require base_path("config.php");
$db = new Database($config['database'] );
$user_id = 3;

if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    
    $id = $_POST['id'];
    $query = 'select * from notes where id = ?';

    //handels failed query  "what if user accesses data that dosent exis"
    $note = $db->query($query, [$id])->fetchorFail();

    authorize($note['user_id'] === $user_id);
    //if autentic user is acessing his data and wants to delete

    $query = 'delete from notes where id = ?';

    //handels failed query  "what if user accesses data that dosent exis"
    $db->query($query, [$id]);

    //after deleting data
    header('location: /notes');
    exit();
   
}

$id = $_GET['id'];
$query = 'select * from notes where id = ?';
//handels failed query  "what if user accesses data that dosent exis"
$note = $db->query($query, [$id])->fetchorFail();

//we havent reviewed sessions but if we were to secure a page from autenticate users we would have to match the logged in users id with ehr user_id foreign key in the notes table leta=s say the logged in user has an id of 3
authorize($note['user_id'] === $user_id);


view("notes/show.view.php", [
    "heading" => $heading,
    "note"=> $note,
]);//loads views  

