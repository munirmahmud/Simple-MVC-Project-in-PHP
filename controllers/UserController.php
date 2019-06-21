<?php
class UserController
{
    public function registerUser()
    {
        require 'views/register-user.view.php';
    }

    public function users()
    {
		$users = App::get('database')->selectAll('users');

		require 'views/users.view.php';
    }


    public function insertUser()
    {
		App::get('database')->insert('users', [
			'first_name'	=> trim(ucfirst($_POST['first_name'])),
			'last_name'		=> trim(ucfirst($_POST['last_name'])),
			'email'			=> trim($_POST['email'])
		]);

		header("Location: users");
    }
}