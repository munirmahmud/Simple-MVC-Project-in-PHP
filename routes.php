<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->get('register-user', 'controllers/register-user.php');
$router->get('users', 'controllers/users.php');
$router->post('insert-user', 'controllers/insert-user.php');
