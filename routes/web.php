<?php

if (!isset($router)) {
    throw new Exception('Router not found');
}

$router->get('/', 'HomeController', 'index');
$router->get('/login', 'AuthController', 'login');
$router->post('/login', 'AuthController', 'authenticate');
$router->get('/vehicles', 'VehicleController', 'index');
$router->get('/vehicles/{id}', 'VehicleController', 'show');
$router->get('/customers', 'CustomerController', 'index');
$router->get('/tires/{id}/measurements', 'TireController', 'measurements');
$router->get('/', 'HomeController', 'index');