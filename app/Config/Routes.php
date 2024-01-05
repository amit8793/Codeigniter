<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hello_world', 'Home::hello_world');
$routes->get('/insert', 'Home::insert');
$routes->get('/viewdata', 'Home::show');
$routes->get('edituser/(:num)', 'Home::singleUser/$1');
$routes->post('update', 'Home::update');
$routes->get('delete/(:num)', 'Home::delete/$1');
