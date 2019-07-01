<?php
class Connection
{
    /**
    * Create a database connection using PDO class 
    *
    * @param $config an associative array
    * @return string database details
    */
    public static function make($config)
    {
		try {
			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch(PDOExeption $e){
			die($e->getMessage());
		}	
    }
}