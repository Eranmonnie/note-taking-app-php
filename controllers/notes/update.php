<?php
$heading = "Edit";
//allows us to use core\Database
use core\App;
use core\Validate;

$db = App::resolve('core\Database');
$user_id = 14;
$err = [];
$body = $_POST['body'];  
$id = $_POST['id'];

$query = 'select * from notes where id = ?';

//handels failed query  "what if user accesses data that dosent exis"
$note = $db->query($query, [$id])->fetchorFail();

authorize($note['user_id'] === $user_id);

if (! Validate::string($body, 1, 1000)){
    $err['body'] = "A body of no more than 1000 characters is required";   
}

if (! empty(($err))){
    return view("notes/edit.view.php", [
        "heading" => $heading,
        "err" =>$err,
        "note" =>$note,
    ]);//loads views 
}

$notes = $db->query("UPDATE notes set notes = ? where id = ?",[
    $body,$id
    ]); 
header('location: /notes');
exit();

