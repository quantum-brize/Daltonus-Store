<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
// Frontend Routes
$routes->get('/',                               'Frontend\Frontend_Controller::index');
$routes->get('/logout',                         'Frontend\Frontend_Controller::logout');
$routes->get('/login',                          'Frontend\Frontend_Controller::load_login');
$routes->post('/login-action',                  'Frontend\Frontend_Controller::handle_login');
$routes->get('/forgot-password',                'Frontend\Frontend_Controller::load_forgot_password');
$routes->get('/sign-up',                        'Frontend\Frontend_Controller::load_signup');
$routes->get('/sign-up-success',                'Frontend\Frontend_Controller::signup_success');
$routes->post('/sign-up-action',                'Frontend\Frontend_Controller::handle_signup');
$routes->get('/change-password',                'Frontend\Frontend_Controller::change_password');
$routes->post('/change-password-action',        'Frontend\Frontend_Controller::handle_change_password');
$routes->post('/send-otp',                      'Frontend\Frontend_Controller::send_otp');
$routes->get('/verify-otp',                     'Frontend\Frontend_Controller::load_otp');
$routes->post('/verify-otp-action',             'Frontend\Frontend_Controller::verify_otp');
$routes->get('/product/list',                   'Frontend\Product_Controller::product_list');
$routes->get('/product/details',                'Frontend\Product_Controller::product_details');
$routes->get('/product/category',               'Frontend\Product_Controller::product_category');
$routes->get('/users/account',                  'Frontend\Frontend_Controller::account');
$routes->get('/about-us',                       'Frontend\Frontend_Controller::about_us');
$routes->get('/purchase-guide',                 'Frontend\Frontend_Controller::purchase_guide');
$routes->get('/terms-conditions',               'Frontend\Frontend_Controller::terms_conditions');
$routes->get('/privacy-policy',                 'Frontend\Frontend_Controller::privacy_policy');
$routes->get('/faq',                            'Frontend\Frontend_Controller::faq');
$routes->get('/invoice',                        'Frontend\Order_Controller::invoice');
$routes->get('/order/success',                  'Frontend\Order_Controller::order_success');



// Admin Routes
$routes->get('/admin',                          'Admin\Admin_Controller::index');
$routes->get('/admin/login',                    'Admin\Admin_Controller::load_login');
$routes->get('/admin/logout',                   'Admin\Admin_Controller::logout');
$routes->post('/admin/login-action',            'Admin\Admin_Controller::handle_login');
$routes->get('/admin/categories',               'Admin\Category_Controller::index');
$routes->get('/admin/products',                 'Admin\Product_Controller::index');
$routes->get('/admin/products/add',             'Admin\Product_Controller::load_product_add');
$routes->get('/admin/orders',                   'Admin\Orders_Controller::index');
$routes->get('/admin/users/customers',          'Admin\User_Controller::load_customer');
$routes->get('/admin/users/vendors',            'Admin\User_Controller::load_vendor');



// Api Routes
$routes->get('/api',                            'Api\Api_Controller::index');
$routes->get('/api/categories/all',             'Api\Category_Controller::GET_categories');
$routes->get('/api/categories/single',          'Api\Category_Controller::GET_category_single');
$routes->get('/api/categories',                 'Api\Category_Controller::GET_category');
$routes->post('/api/category/add',              'Api\Category_Controller::POST_add_category');
$routes->post('/api/category/update',           'Api\Category_Controller::POST_update_category');
$routes->post('/api/category/delete',           'Api\Category_Controller::POST_delete_category');
$routes->post('/api/product/add',               'Api\Product_Controller::POST_add_product');



// Vendor Routes



