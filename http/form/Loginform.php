<?php

namespace http\form;

use core\App;
use core\Validate;

class Loginform{
    protected $err = [];
    public function validator($email, $password){

    $db = App::resolve("core\Database");

    if (! Validate::email($email)){
        $this->err['email'] = "invalid email address";
        return false;

    }

    if (! Validate::string($password, 1, 5)){
        $this->err['password'] = "invalid password";
        return false;

    }

    //query db for useer if email exists 
    $check = $db->query("select * from users where email = ? ",[
        $email,
    ])->fetch();

    if (! $check){

        $this->err['email'] ='email is not registered';

        return false;
        
    }


    if(password_verify($password, $check['password'])){

         return true;
    }

    else{
        
        $this->err['email'] = 'no matching account for email and password';
        $this->err['password'] = 'no matching account for email and password';
    }
    
    if (! empty($this->err)){

        return false;

    }

    return true;

    }

    public function geterrors(){
        return $this->err;
    }

}