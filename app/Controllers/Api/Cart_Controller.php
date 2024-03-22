<?php

namespace App\Controllers\Api;

use App\Models\UserCartModel;
use Config\Exceptions;

class Cart_Controller extends Api_Controller
{
    public function index(): void
    {
        echo 'CART';
    }


    private function cart_add($data){
        $resp = [
            'status' => false,
            'message' => 'Cannot Add Item To Cart',
            'data' => null
        ];

        $cartData = [
            'uid' => $this->generate_uid(UID_CART),
            'user_id' => $data['user_id'],
            'product_id' => $data['product_id'],
            'variation_id' => $data['variation_id'],
            'qty' => $data['qty'],
        ];

        $UserCartModel = new UserCartModel();
        try{

            $isAdded = $UserCartModel->insert($cartData);
            if($isAdded){
                $resp['status'] = true;
                $resp['message'] = 'Item Added To Cart';
                $resp['data'] = ['cart_id' => $cartData['uid']];
    
            }
        }catch(\Exception $e){
            $resp['message'] = $e->getMessage();
        }
        
        return $resp;
    }

    public function cart($data){
        $resp = [
            'status' => false,
            'message' => 'Cannot Add Item To Cart',
            'data' => null
        ];

        

        return $resp;
    }




    public function GET_cart(){
        $data = $this->request->getPost();

        $resp = $this->cart($data);
        return $this->response->setJSON($resp);
    }

    public function POST_cart_add(){
        $data = $this->request->getPost();

        $resp = $this->cart_add($data);
        return $this->response->setJSON($resp);

    }


}