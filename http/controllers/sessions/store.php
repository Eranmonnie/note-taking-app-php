<?php
use core\App;
use core\Validate;
use http\form\Loginform;

//get data from request 
$heading = 'Login';
$db = App::resolve("core\Database");

$email = $_POST['email'];
$password = $_POST['password'];

$value = new Loginform;
if (! $value->validator($email, $password)) {
    return view("sessions/create.view.php", [
        "heading" => $heading,
        "err" => $value->geterrors(), 
    ]);
}

else{

    $_SESSION['user'] =['email'=> $email];   
    header('location: /');
    exit();

}


// $err = [];

// if (! Validate::email($email)){
//     $err['email'] = "invalid email address";
// }

//  //query db for useer if email exists 
// $check = $db->query("select * from users where email = ? ",[
//     $email,
// ])->fetch();

// if (! $check){

//     $err['email'] ='email is not registered';
    
// }

// if (! empty(($err))){
//     return view("sessions/create.view.php", [
//         "heading" => $heading,
//         "err" =>$err,
//     ]);//loads views 
    
// }

// if( password_verify($password, $check['password'])){

//     $_SESSION['user'] =[
//         'email'=> $email
//     ];
    
//     header('location: /');
//     exit();
   
// }
// else{
//     return view("sessions/create.view.php", [
//         "heading" => $heading,
//         "err" =>[
//         'email'=>'no matching account for emai and password',
//         'password'=>'no matching account for emai and password',
//         ]
//     ]);//loads views 
// }



    //yes ? log he user in and set session 

//else create user and set session 

