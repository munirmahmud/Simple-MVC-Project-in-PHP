<?php
class PagesController
{
    public function home()
	{
		$tasks = App::get('database')->selectAll('todos');

		require 'views/index.view.php';
	}

	public function about()
	{
		$projectName = 'Simple MVC Project';

		require 'views/about.view.php';
	}

	public function contact()
	{
		require 'views/contact.view.php';	
	}

	public function ourCulture()
	{
		require 'views/about-culture.view.php';
	}
}