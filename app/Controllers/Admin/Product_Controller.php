<?php
namespace App\Controllers\Admin;
use App\Controllers\Admin\Admin_Controller;

class Product_Controller extends Admin_Controller{

    public function index(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['products_css.php'],
                'header_asset_link' => [
                    'assets_admin/libs/nouislider/nouislider.min.css',
                    'assets_admin/libs/gridjs/theme/mermaid.min.css',
                    'assets_admin/css/app.min.css',
                    'assets_admin/css/custom.min.css'
                ],
                'title' => 'Products',
                'header' => [],
                'sidebar' => ['products'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['products_js.php'],
                'footer_asset_link'=> [
                    'assets_admin/libs/nouislider/nouislider.min.js',
                    'assets_admin/libs/wnumb/wNumb.min.js',
                    'assets_admin/libs/gridjs/gridjs.umd.js',
                    'assets_admin/js/pages/ecommerce-product-list.init.js',
                    'assets_admin/js/app.js',
                ],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/products',$data);
    }

    
    public function product_add(){
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['products_add_css.php'],
                'header_asset_link' => [
                    'assets_admin/libs/dropzone/dropzone.css'
                ],
                'title' => 'Products | Add',
                'header' => [],
                'sidebar' => ['products'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['products_add_js.php'],
                'footer_asset_link'=> [
                    'assets_admin/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js',
                    'assets_admin/libs/dropzone/dropzone-min.js',
                    'assets_admin/js/pages/ecommerce-product-create.init.js',
                    'assets_admin/js/app.js',

                ],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/products_add',$data);
    }
 


}

?>