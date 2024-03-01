<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
// Frontend Routes
$routes->get('/',                       'Frontend\Frontend_Controller::index');
$routes->get('/login',                  'Frontend\Frontend_Controller::load_login');
$routes->get('/logout',                 'Frontend\Frontend_Controller::logout');
$routes->get('/forgot-password',        'Frontend\Frontend_Controller::load_forgot_password');
$routes->get('/sign-up',                'Frontend\Frontend_Controller::load_signup');
$routes->get('/change-password',        'Frontend\Frontend_Controller::change_password');
$routes->post('/sign-up-action',        'Frontend\Frontend_Controller::handle_signup');
$routes->post('/send-otp',              'Frontend\Frontend_Controller::send_otp');
$routes->post('/change-password-action','Frontend\Frontend_Controller::handle_change_password');
$routes->post('/login-action',          'Frontend\Frontend_Controller::handle_login');
$routes->get('/sign-up-success',        'Frontend\Frontend_Controller::signup_success');
$routes->get('/verify-otp',             'Frontend\Frontend_Controller::load_otp');
$routes->post('/verify-otp-action',     'Frontend\Frontend_Controller::verify_otp');



// Admin Routes
$routes->get('/admin',                  'Admin\Admin_Controller::index');
$routes->get('/admin/login',            'Admin\Admin_Controller::load_login');
$routes->get('/admin/logout',           'Admin\Admin_Controller::logout');
$routes->post('/admin/login-action',    'Admin\Admin_Controller::handle_login');
$routes->get('/admin/categories',       'Admin\Category_Controller::index');



// Api Routes
$routes->get('/api',                     'Api\Api_Controller::index');
$routes->get('/api/categories/all',      'Api\Category_Controller::GET_categories');
$routes->get('/api/categories',          'Api\Category_Controller::GET_category');


// Vendor Routes
$routes->get('/vendor',                 'Vendor\Vendor_Controller::index');


