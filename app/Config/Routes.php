<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Landing::index');
$routes->get('/about', 'Pages::about');
$routes->get('/customers', 'Customers::index');
$routes->get('/users', 'Users::index');