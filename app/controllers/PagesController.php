<?php
namespace App\controllers;

use App\core\App;


class PagesController
{
    public function home()
	{
		$tasks = App::get('database')->selectAll('todos');

		return view('index', compact('tasks'));
	}

	public function about()
	{
		$projectName = 'Simple MVC Project';

		return view('about', compact('projectName'));
	}

	public function contact()
	{
		return view('contact');	
	}

	public function ourCulture()
	{
		return view('about-culture');
	}
}