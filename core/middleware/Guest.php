<?php

namespace core\middleware;

class Guest{
    public function handel(){
         
        if (isset($_SESSION['user'])){
            header('location: /');
            exit();
        }
    }
}
