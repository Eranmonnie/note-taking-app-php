<?php

namespace core;
class Validate {
   public static function string($value, $min , $max){
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max  ;
    }
}