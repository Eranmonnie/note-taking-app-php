<?php
use core\App;

$heading = "Edit";
$err = [];
$db = App::resolve('core\Database');
$user_id = 3;
$id = $_GET['id'];

$query = 'select * from notes where id = ?';

$note = $db->query($query, [$id])->fetchorFail();

authorize($note['user_id'] === $user_id);

view("notes/edit.view.php", [
    "heading" => $heading,
    "err" =>$err,
    "note"=>$note,
]);//loads views 