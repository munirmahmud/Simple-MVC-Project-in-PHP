<?php
class UserController
{
    public function registerUser()
    {
        return view('register-user'); 
    }

    public function users()
    {
		$users = App::get('database')->selectAll('users');

		return view('users', compact('users'));   
    }


    public function store()
    {
		App::get('database')->insert('users', [
			'first_name'	=> trim(ucfirst($_POST['first_name'])),
			'last_name'		=> trim(ucfirst($_POST['last_name'])),
			'email'			=> trim($_POST['email'])
		]);

		header("Location: users");
    }
}