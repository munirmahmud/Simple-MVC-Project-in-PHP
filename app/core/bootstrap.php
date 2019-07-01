<?php
use App\core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));


/**
* Get the view file name from controllers 
* data array expects what data you want to send to the view
*
* @param $name string
* @param $data array()
* @return string
*/
function view($name, $data = [])
{
	extract($data);
	return require "app/views/{$name}.view.php";
}


/**
* Redirect after an action
*
* @param $path router name
* @return string 
*/
function redirect($path)
{
	header("Location: {$path}");
}

