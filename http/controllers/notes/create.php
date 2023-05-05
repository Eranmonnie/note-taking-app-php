<?php

$heading = "create";
$err = [];

view("notes/create.view.php", [
    "heading" => $heading,
    "err" =>$err,
]);//loads views 