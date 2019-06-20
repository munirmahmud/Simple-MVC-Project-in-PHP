<?php
class Connection
{
    public static function make()
    {
		try {
			return new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
		} catch(PDOExeption $e){
			die($e->getMessage());
		}	
    }
}