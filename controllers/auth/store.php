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

 //query db for useer if email exists 
$check = $db->query("select * from users where email = ? ",[
    $email,
])->fetch();

//check if email exists
if ($check){

    $err['email'] = "email already exists";

}

if (! empty(($err))){
    return view("auth/create.view.php", [
        "heading" => $heading,
        "err" =>$err,
    ]);//loads views 
    
}

$User = $db->query("INSERT INTO users (name, email, password) VALUES (?, ?, ?)", [
$name,$email,$password]);

$_SESSION['user'] =[
    'email'=> $email
];

header('location: /');
exit();




    //yes ? log he user in and set session 

//else create user and set session 

