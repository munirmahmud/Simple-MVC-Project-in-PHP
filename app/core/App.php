<?php
namespace App\core;


class App
{
    // Associative array 
	protected static $registry = [];

    /**
    * Bind value using key like an associative array
    *
    * @param $key associative array key
    * @param $value associative array value
    */
    public static function bind($key, $value)
    {
    	static::$registry[$key] = $value;
    }


    /**
    * We used this method to get the value using specific array key
    *
    * @param $key associative array key
    * @return string associative array value
    */
    public static function get($key)
    {
    	if (! array_key_exists($key, static::$registry)) {
    		throw new Exception("No {$key} is bound in the container");
    	}

    	return static::$registry[$key];
    }
}