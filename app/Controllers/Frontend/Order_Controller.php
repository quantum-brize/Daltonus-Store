<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\OtpModel;

class Order_Controller extends Main_Controller
{

    public function invoice(): void
    {
        $this->load_page('/frontend/invoice', PAGE_DATA_FRONTEND);
    }

    public function order_success(): void
    {
        $this->load_page('/frontend/order_success', PAGE_DATA_FRONTEND);
    }

    public function track_order(): void
    {
        $this->load_page('/frontend/track_order', PAGE_DATA_FRONTEND);
    }
}
