<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/productos', 'Productos::index');

$routes->get('/productos/(:num)', 'Productos::show/$1');

$routes->get('/productos/transaccion', 'Productos::transaccion');
