<?php

$heading = "Login";
$err = [];

view("sessions/create.view.php", [
    "heading" => $heading,
    "err" =>$err,
]);//loads views 