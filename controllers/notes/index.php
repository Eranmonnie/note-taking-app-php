<?php
$heading ="My Notes";
$config = require base_path("config.php");
$db = new Database($config['database'] );

$notes = $db->query('select * from notes where user_id = 3')->fetchall();


view("notes/index.view.php", [
    "heading" => $heading,
    "notes"=> $notes,
]);//loads views 