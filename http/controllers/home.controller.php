<?php
$_SESSION['name'] = 'feranmi';

$heading ="Home";
view("home.view.php", [
    "heading" => $heading,
]);//loads views 
