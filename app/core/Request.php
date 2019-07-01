<?php
namespace App\core;

class Request
{

    /**
    * URI from the user request and trim the (/) and parse a specific segment of the URL
    *
    * @return string specific segment after the main domain and before query string   
    **/
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }


    /**
    * @return GET or POST request   
    **/
    public static function method()
    {
    	return $_SERVER['REQUEST_METHOD'];
    }
}