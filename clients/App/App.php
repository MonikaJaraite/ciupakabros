<?php
namespace App;


class App {

    public static function process() 
    {
        
        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);

        print_r($url);
    }
}