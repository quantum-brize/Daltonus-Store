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
        $resp = [
            'status' => false,
            'message' => 'Product_not_added',
            'data'  => $data
        ];
        





        return $resp;

        
    }





    


    public function POST_add_product()
    {

        $data = $this->request->getPost();
        $resp = $this->add_product($data);
        return $this->response->setJSON($resp);

    }
}