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
            'message' => 'Product not added',
            'data' => $data
        ];

        if (empty($this->request->getPost('title'))) {
            $resp['message'] = 'Your Product Has No Name';
        } else if (empty($this->request->getPost('details'))) {
            $resp['message'] = 'Please add Some Details About Your Product';
        } else if (empty($this->request->getPost('price'))) {
            $resp['message'] = 'Set The Price Of Your Product';
        } else if (empty($this->request->getPost('categoryId'))) {
            $resp['message'] = 'Set The Category Of Your Product';
        }




        return $resp;


    }








    public function POST_add_product()
    {

        $data = $this->request->getPost();
        $resp = $this->add_product($data);
        return $this->response->setJSON($resp);

    }
}