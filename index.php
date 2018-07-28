<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';

use App\Core\Router;

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());

