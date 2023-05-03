<?php
use core\App;
use core\Validate;

//get data from request 
$heading = 'signup';
$db = App::resolve("core\Database");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$err = [];
//validate both email and password 
if (! Validate::email($email)){
    $err['email'] = "invalid email address";
}

if(! Validate::string($name, 7, 255)){
    $err['name'] = "invalid username";
}

if(! Validate::string($password, 7, 255)){
    $err['password'] = "invalid password";
}

if (! empty(($err))){
    return view("auth/create.view.php", [
        "heading" => $heading,
        "err" =>$err,
    ]);//loads views 
    
}

$User = $db->query("INSERT INTO users (name, email, password) VALUES (?, ?, ?)", [
$name,$email,$password]);

header('location: /');


//chaeck if user esists

    //yes ? log he user in and set session 

//else create user and set session 

