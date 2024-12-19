<?php
require_once 'app/core/Router.php';
require_once 'routes/web.php';

// Start the application
$router = new Router();
$router->dispatch();