<?php

namespace App\Controllers\Api;



class Product_Controller extends Api_Controller
{

    public function index(): void
    {
        echo 'PRODUCT';
    }

    private function add_product($data)
    {


        return 1;
    }





    


    public function POST_add_product()
    {

        $data = [];
        $product_data = $this->add_product($data);
        $response = [
            'status' => !empty($product_data),
            'message' => !empty($product_data) ? 'product added' : 'cannot not add product',
            'data' => !empty($product_data) ? $product_data : null
        ];

        return $this->response->setJSON($response);

    }
}