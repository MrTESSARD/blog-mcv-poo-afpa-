<?php

namespace App\config;

class Autoloader{
    public static function  register(){
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class){
        var_dump($class);
    }
}