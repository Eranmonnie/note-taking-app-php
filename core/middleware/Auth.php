<?php

namespace core\middleware;

class Auth{
    public function handel(){
         
        if (! isset($_SESSION['user'])){
            header('location: /');
            exit();
        }
    }
}