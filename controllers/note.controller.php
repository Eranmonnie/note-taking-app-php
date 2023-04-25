<?php
$heading ="Note";
$config = require "config.php";
$db = new Database($config['database'] );
$id = $_GET['id'];
$query = 'select * from notes where user_id = ?';
$note = $db->query($query, [$id])->fetch();


require "views/note.view.php";