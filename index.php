<?php
// Define root path
define('ROOT_PATH', __DIR__);

// Autoloader functie
spl_autoload_register(function ($className) {
    // Zoek eerst in controllers
    $controllerPath = ROOT_PATH . "/app/controllers/{$className}.php";
    if (file_exists($controllerPath)) {
        require_once $controllerPath;
        return;
    }

    // Zoek in core
    $corePath = ROOT_PATH . "/app/core/{$className}.php";
    if (file_exists($corePath)) {
        require_once $corePath;
        return;
    }

    // Zoek in models
    $modelPath = ROOT_PATH . "/app/models/{$className}.php";
    if (file_exists($modelPath)) {
        require_once $modelPath;
        return;
    }
});

// Load core classes
require_once 'app/core/Controller.php';
require_once 'app/core/Router.php';

// Load config
require_once 'app/config/config.php';

// Start the application
$router = new Router();

// Load routes
require 'routes/web.php';

// Dispatch the router
$router->dispatch();