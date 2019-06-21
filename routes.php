<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@ourCulture');
$router->get('contact', 'PagesController@contact');

$router->get('register-user', 'UserController@registerUser');
$router->get('users', 'UserController@users');
$router->post('insert-user', 'UserController@store');
