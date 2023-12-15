<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('maskapai', 'Maskapai::maskapai');
$routes->setAutoRoute(true);