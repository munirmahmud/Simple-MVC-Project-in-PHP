<?php

function connectToDb()
{
	try {
		return new PDO('mysql:host=localhost;dbname=db_pdo', 'root', '');
	} catch(PDOExeption $e){
		die($e->getMessage());
	}	
}


function selectAll($pdo)
{
	$stmt = $pdo->prepare("SELECT * FROM todos");
	$stmt->execute();

	return $stmt->fetchAll(PDO::FETCH_OBJ);
}


function dd($data)
{
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}