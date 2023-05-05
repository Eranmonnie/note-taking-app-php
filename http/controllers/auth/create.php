<?php

$heading = "Signup";
$err = [];

view("auth/create.view.php", [
    "heading" => $heading,
    "err" =>$err,
]);//loads views 