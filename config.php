<?php

return [
	'database'	=> [
		'name'			=> 'db_pdo',
		'username'		=> 'root',
		'password'		=> '',
		'connection'	=> 'mysql:host=localhost',
		'options'		=> [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];