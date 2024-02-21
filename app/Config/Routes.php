<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Frontend Routes
$routes->get('/',                       'Frontend\Frontend_Controller::index');


// Admin Routes
$routes->get('/admin',                  'Admin\Admin_Controller::index');
$routes->get('/admin/login',            'Admin\Admin_Controller::load_login');


// Vendor Routes
$routes->get('/vendor',                 'Vendor\Vendor_Controller::index');


// Api Routes
$routes->get('/api',                    'Api\Api_Controller::index');
