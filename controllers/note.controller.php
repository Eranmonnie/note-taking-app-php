<?php
$heading ="Note";
$config = require "config.php";
$db = new Database($config['database'] );
$id = $_GET['id'];
$query = 'select * from notes where user_id = ?';
$note = $db->query($query, [$id])->fetch();

//what if user accesses data that dosent exist 
if (!$note){
    abort();
}
//we havent reviewed sessions but if we were to secure a page from autenticate users we would have to match the logged in users id with ehr user_id foreign key in the notes table leta=s say the logged in user has an id of 3
if ($note['user_id'] !== 3){
    abort(403);
}

require "views/note.view.php";