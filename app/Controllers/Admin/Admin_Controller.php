<?php

namespace App\Controllers\Admin;
use App\Controllers\Main_Controller;

class Admin_Controller extends Main_Controller
{
    public function index(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => [],
                'title' => 'Dashboard',
                'header' => [],
                'sidebar' => ['dashboard'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['dashboard_js.php'],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->load_page('/admin/dashboard',$data);
    }

    public function load_login(): void
    {
        echo view('admin/login');
    }


}
