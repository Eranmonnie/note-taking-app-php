<?php

use core\Database;

$heading ="Note";
$config = require base_path("config.php");
$db = new Database($config['database'] );

$id = $_GET['id'];
$query = 'select * from notes where id = ?';
//handels failed query  "what if user accesses data that dosent exis"
$note = $db->query($query, [$id])->fetchorFail();

//we havent reviewed sessions but if we were to secure a page from autenticate users we would have to match the logged in users id with ehr user_id foreign key in the notes table leta=s say the logged in user has an id of 3
authorize($note['user_id'] === 3);


view("notes/show.view.php", [
    "heading" => $heading,
    "note"=> $note,
]);//loads views  