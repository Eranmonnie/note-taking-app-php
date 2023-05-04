<?php


if (isset($_SESSION['user'])){
    header('location: /'); 
    exit();
}

$heading = "Signup";
$err = [];

view("auth/create.view.php", [
    "heading" => $heading,
    "err" =>$err,
]);//loads views 