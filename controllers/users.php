<?php
$app['database']->insert('users', [
	'first_name'	=> trim(ucfirst($_POST['first_name'])),
	'last_name'		=> trim(ucfirst($_POST['last_name'])),
	'email'			=> trim($_POST['email'])
]);