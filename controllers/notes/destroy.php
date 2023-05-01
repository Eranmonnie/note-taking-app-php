<?php

use core\Database;

$heading ="Note";
$config = require base_path("config.php");
$db = new Database($config['database'] );
$user_id = 3;



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





