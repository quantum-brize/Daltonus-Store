<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\OtpModel;

class ProductController extends Main_Controller
{
    public function product_list_left(): void
    {
        $this->load_page('/frontend/product_list_left', PAGE_DATA_FRONTEND);
    }
    
    public function product_details(): void
    {
        $this->load_page('/frontend/product_details', PAGE_DATA_FRONTEND);
    }

    public function product_category(): void
    {
        $this->load_page('/frontend/products_category', PAGE_DATA_FRONTEND);
    }
}
