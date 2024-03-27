<?php

namespace App\Controllers\Admin;
use App\Controllers\Main_Controller;
use App\Models\UsersModel;
class Admin_Controller extends Main_Controller
{
    public function index(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => [],
                'header_asset_link' => [
                    'assets_admin/libs/jsvectormap/css/jsvectormap.min.css',
                    'assets_admin/libs/swiper/swiper-bundle.min.css'
                ],
                'title' => 'Dashboard',
                'header' => [],
                'sidebar' => ['dashboard'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['dashboard_js.php'],
                'footer_asset_link' => [
                    'assets_admin/libs/apexcharts/apexcharts.min.js',
                    'assets_admin/libs/jsvectormap/js/jsvectormap.min.js',
                    'assets_admin/libs/jsvectormap/maps/world-merc.js',
                    'assets_admin/libs/swiper/swiper-bundle.min.js',
                    'assets_admin/js/pages/dashboard-ecommerce.init.js'
                ],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/dashboard',$data);
    }

    public function banner(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['banners_css.php'],
                'header_asset_link' => [
                    'assets_admin/libs/nouislider/nouislider.min.css',
                    'assets_admin/libs/gridjs/theme/mermaid.min.css',
                    'assets_admin/css/app.min.css',
                    'assets_admin/css/custom.min.css'
                ],
                'title' => 'Banners',
                'header' => [],
                'sidebar' => ['banners'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['banners_js.php'],
                'footer_asset_link' => [
                    'assets_admin/libs/nouislider/nouislider.min.js',
                    'assets_admin/libs/wnumb/wNumb.min.js',
                    'assets_admin/libs/gridjs/gridjs.umd.js',
                    'assets_admin/js/pages/ecommerce-product-list.init.js',
                ],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/banners', $data);
    }

    public function banners_add(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['banners_add_css.php'],
                'header_asset_link' => [
                    'assets_admin/libs/nouislider/nouislider.min.css',
                    'assets_admin/libs/gridjs/theme/mermaid.min.css',
                    'assets_admin/css/app.min.css',
                    'assets_admin/css/custom.min.css'
                ],
                'title' => 'Banners',
                'header' => [],
                'sidebar' => ['banners'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['banners_add_js.php'],
                'footer_asset_link' => ['assets_admin/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js'],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/banners_add', $data);
    }

    public function banners_update(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['banners_update_css.php'],
                'header_asset_link' => [
                    'assets_admin/libs/nouislider/nouislider.min.css',
                    'assets_admin/libs/gridjs/theme/mermaid.min.css',
                    'assets_admin/css/app.min.css',
                    'assets_admin/css/custom.min.css'
                ],
                'title' => 'Banners',
                'header' => [],
                'sidebar' => ['banners'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['banner_update_js.php'],
                'footer_asset_link' => ['assets_admin/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js'],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/banner_update', $data);
    }

    public function  discounts_add(){
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['discounts_add_css.php'],
                'header_asset_link' => [],
                'title' => 'Discounts',
                'header' => [],
                'sidebar' => ['discounts'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['discounts_add_js.php'],
                'footer_asset_link' => [],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/discounts_add', $data);
    }

    public function  discounts_list(){
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['discounts_list_css.php'],
                'header_asset_link' => [],
                'title' => 'Discounts',
                'header' => [],
                'sidebar' => ['discounts'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['discounts_list_js.php'],
                'footer_asset_link' => [],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/discounts_list', $data);
    }


    public function isAuth($page,$data){
        $session = \Config\Services::session();
        if(empty($session->get(SES_ADMIN_USER_ID))){
            return $this->load_login();
        }else{
            $this->load_page($page,$data);
        }
    }
    public function logout()
    {
        $session = \Config\Services::session();

        $session->remove(SES_ADMIN_USER_ID);
        $session->remove(SES_ADMIN_TYPE);
        return redirect()->to('admin/login');
    }
    public function load_login(): void
    {
        echo view('admin/login');
    }

    public function handle_login(){
        $response =[
            "status" => false,
            "message" => "user not found"
        ];

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $UsersModel = new UsersModel();
        $UsersData = $UsersModel
            ->where('password', md5($password))
            ->where('email', $email)
            ->where('type', 'admin')
            ->where('status', 'active')
            ->get()
            ->getResultArray();
        $UsersData = !empty($UsersData[0]) ? $UsersData[0] : null;
        if (!empty($UsersData)) {
            $session = \Config\Services::session();
            $session->set(SES_ADMIN_USER_ID, $UsersData['uid']);
            $session->set(SES_ADMIN_TYPE, $UsersData['type']);
            $response = [
                "status" => true,
                "message" => "User Found",
            ];
        }
        echo json_encode($response);

    }

}
