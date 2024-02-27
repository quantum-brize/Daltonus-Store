<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Frontend Routes
$routes->get('/',                       'Frontend\Frontend_Controller::index');
$routes->get('/login',                  'Frontend\Frontend_Controller::load_login');
$routes->get('/logout',                 'Frontend\Frontend_Controller::logout');
$routes->get('/sign-up',                'Frontend\Frontend_Controller::load_signup');
$routes->post('/sign-up-action',        'Frontend\Frontend_Controller::handle_signup');
$routes->post('/login-action',          'Frontend\Frontend_Controller::handle_login');
$routes->get('/sign-up-success',        'Frontend\Frontend_Controller::signup_success');
$routes->get('/verify-otp',             'Frontend\Frontend_Controller::load_otp');
$routes->post('/verify-otp-action',     'Frontend\Frontend_Controller::verify_otp');



// Admin Routes
$routes->get('/admin',                  'Admin\Admin_Controller::index');
$routes->get('/admin/login',            'Admin\Admin_Controller::load_login');




// Api Routes
$routes->get('/api',                    'Api\Api_Controller::index');



// Vendor Routes
$routes->get('/vendor',                 'Vendor\Vendor_Controller::index');


