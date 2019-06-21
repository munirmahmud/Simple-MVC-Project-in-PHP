<?php
$users = $app['database']->selectAll('users');

require 'views/users.view.php';