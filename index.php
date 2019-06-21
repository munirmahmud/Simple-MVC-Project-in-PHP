<?php
require 'vendor/autoload.php';
require 'app/core/bootstrap.php';

use App\core\{Router, Request};

Router::load('routes.php')->direct(Request::uri(), Request::method());