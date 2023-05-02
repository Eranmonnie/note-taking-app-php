<?php

use core\App;

$heading ="My Notes";
$db = App::resolve('core\Database');

$notes = $db->query('select * from notes where user_id = 3')->fetchall();


view("notes/index.view.php", [
    "heading" => $heading,
    "notes"=> $notes,
]);//loads views 