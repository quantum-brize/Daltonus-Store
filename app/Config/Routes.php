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
$routes->get('/user/account',                   'Frontend\Frontend_Controller::account');
$routes->get('/user/address',                   'Frontend\Frontend_Controller::address');
$routes->get('/user/cart',                      'Frontend\Product_Controller::cart');
$routes->get('/about-us',                       'Frontend\Frontend_Controller::about_us');
$routes->get('/purchase-guide',                 'Frontend\Frontend_Controller::purchase_guide');
$routes->get('/terms-conditions',               'Frontend\Frontend_Controller::terms_conditions');
$routes->get('/privacy-policy',                 'Frontend\Frontend_Controller::privacy_policy');
$routes->get('/faq',                            'Frontend\Frontend_Controller::faq');
$routes->get('/invoice',                        'Frontend\Order_Controller::invoice');
$routes->get('/order/success',                  'Frontend\Order_Controller::order_success');
$routes->get('/order/track',                    'Frontend\Order_Controller::track_order');
$routes->get('/order/history',                  'Frontend\Order_Controller::order_history');
$routes->get('/order/conformation',             'Frontend\Order_Controller::conformation');
$routes->get('/contact-us',                     'Frontend\Frontend_Controller::contact_us');
$routes->get('/payment',                        'Frontend\Order_Controller::payment');
$routes->get('/review',                         'Frontend\Product_Controller::review');
$routes->get('/wishlist',                       'Frontend\Product_Controller::wishlist');



// Admin Routes
$routes->get('/admin',                          'Admin\Admin_Controller::index');
$routes->get('/admin/login',                    'Admin\Admin_Controller::load_login');
$routes->get('/admin/logout',                   'Admin\Admin_Controller::logout');
$routes->post('/admin/login-action',            'Admin\Admin_Controller::handle_login');
$routes->get('/admin/categories',               'Admin\Category_Controller::index');
$routes->get('/admin/product',                  'Admin\Product_Controller::load_single_product');
$routes->get('/admin/product/list',             'Admin\Product_Controller::index');
$routes->get('/admin/product/add',              'Admin\Product_Controller::load_product_add');
$routes->get('/admin/product/update',           'Admin\Product_Controller::load_product_update');
$routes->get('/admin/product/variant/add',      'Admin\Product_Controller::load_add_variants');
$routes->get('/admin/orders',                   'Admin\Orders_Controller::index');
$routes->get('/admin/users/customers',          'Admin\User_Controller::load_customer');
$routes->get('/admin/users/vendors',            'Admin\User_Controller::load_vendor');
$routes->get('/admin/banners',                  'Admin\Admin_Controller::banner');
$routes->get('/admin/banners/add',              'Admin\Admin_Controller::banners_add');
$routes->get('/admin/banners/update',           'Admin\Admin_Controller::banners_update');



// Api Routes
$routes->get('/api',                                'Api\Api_Controller::index');
$routes->get('/api/categories/all',                 'Api\Category_Controller::GET_categories');
$routes->get('/api/categories/single',              'Api\Category_Controller::GET_category_single');
$routes->get('/api/categories',                     'Api\Category_Controller::GET_category');
$routes->post('/api/category/add',                  'Api\Category_Controller::POST_add_category');
$routes->post('/api/category/update',               'Api\Category_Controller::POST_update_category');
$routes->post('/api/category/delete',               'Api\Category_Controller::POST_delete_category');
$routes->get('/api/product',                        'Api\Product_Controller::GET_product');
$routes->post('/api/product/add',                   'Api\Product_Controller::POST_add_product');
$routes->post('/api/product/update',                'Api\Product_Controller::POST_update_product');
$routes->get('/api/product/variant',                'Api\Product_Controller::GET_variation');
$routes->get('/api/product/variant/options',        'Api\Product_Controller::GET_variation_options');
$routes->post('/api/product/variant/add',           'Api\Product_Controller::POST_add_new_variant');
$routes->get('/api/product/variant/stock/update',   'Api\Product_Controller::GET_product_config_stock_update');
$routes->get('/api/product/stock/update',           'Api\Product_Controller::GET_product_stock_update');
$routes->post('/api/user/update',                   'Api\User_Controller::POST_update_user');
$routes->post('/api/change/password',               'Api\User_Controller::POST_change_password');
$routes->post('/api/message',                       'Api\User_Controller::POST_message');
$routes->get('/api/user',                           'Api\User_Controller::GET_get_user');
$routes->get('/api/user/cart',                      'Api\Cart_Controller::GET_cart');
$routes->post('/api/user/cart/add',                 'Api\Cart_Controller::POST_cart_add');
$routes->get('/api/user/cart/remove',               'Api\Cart_Controller::GET_cart_remove');
$routes->get('/api/user/cart/empty',                'Api\Cart_Controller::GET_cart_empty');
$routes->get('/api/user/id',                        'Api\Product_Controller::GET_user_id');
$routes->post('/api/banner/add',                    'Api\Banner_Controller::POST_add_banner');
$routes->get('/api/banners',                        'Api\Banner_Controller::GET_banners');
$routes->get('/api/banner/delete',                  'Api\Banner_Controller::GET_delete_banner');
$routes->get('/api/banner/update',                  'Api\Banner_Controller::GET_update_banner');
$routes->post('/api/update/banner',                  'Api\Banner_Controller::POST_banner_update');




// Vendor Routes



