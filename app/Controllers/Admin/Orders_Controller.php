<?php
namespace App\Controllers\Admin;
use App\Controllers\Admin\Admin_Controller;

class Orders_Controller extends Admin_Controller{

    public function index(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => ['orders_css.php'],
                'title' => 'Orders',
                'header' => [],
                'sidebar' => ['orders'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['orders_js.php'],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/orders',$data);
    }

    

 


}

?>