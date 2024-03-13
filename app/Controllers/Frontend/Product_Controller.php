<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\OtpModel;

class Product_Controller extends Main_Controller
{
    public function product_list(): void
    {
        $this->load_page('/frontend/product_list', PAGE_DATA_FRONTEND);
    }
    
    public function product_details(): void
    {
        $this->load_page('/frontend/product_details', PAGE_DATA_FRONTEND);
    }

    public function product_category(): void
    {
        $this->load_page('/frontend/products_category', PAGE_DATA_FRONTEND);
    }

    public function review(): void
    {
        $this->load_page('/frontend/review', PAGE_DATA_FRONTEND);
    }

    public function cart(): void
    {
        $this->load_page('/frontend/cart', PAGE_DATA_FRONTEND);
    }

    public function wishlist(): void
    {
        $this->load_page('/frontend/wishlist', PAGE_DATA_FRONTEND);
    }

    
}
