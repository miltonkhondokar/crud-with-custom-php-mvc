<?php

use Pecee\SimpleRouter\SimpleRouter;

/* load autoload vendor file */
require_once __DIR__.'/vendor/autoload.php';

define('ROOT', __DIR__);
define('VIEWS', __DIR__.'/views');
define('CSS', 'http://localhost/crud-with-custom-mvc/public/css');
define('JS', 'http://localhost/crud-with-custom-mvc/public/js');
define('IMAGES', 'http://localhost/crud-with-custom-mvc/public/images');

/* Load external routes file */
require_once 'routes/routes.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */
SimpleRouter::setDefaultNamespace('\Demo\Controllers');

// Start the routing
SimpleRouter::start();