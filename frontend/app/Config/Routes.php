<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->group('admin', function($routes) {
$routes->get('login', 'AdminController::login');
$routes->post('login', 'AdminController::loginPost');
$routes->get('register', 'AdminController::register');
$routes->post('register', 'AdminController::registerPost');
$routes->get('dashboard', 'AdminController::dashboard');
$routes->get('logout', 'AdminController::logout');
});
