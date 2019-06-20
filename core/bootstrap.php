<?php
include 'functions.php';
$config = require 'config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'Task.php';

return new QueryBuilder(
	Connection::make($config['database'])
);

