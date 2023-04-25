<?php
require "router.php";
require "database.php";

$config = require "config.php";

$db = new Database($config['database'] );

$id = $_GET['id'];
$query ="select * from blogs where id = ?";

$result = $db->query($query, [$id])->fetchAll();
var_dump($result);