<?php
$users = App::get('database')->selectAll('users');

require 'views/users.view.php';