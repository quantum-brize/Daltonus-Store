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


    private function cart_add($data)
    {
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
        try {

            $isAdded = $UserCartModel->insert($cartData);
            if ($isAdded) {
                $resp['status'] = true;
                $resp['message'] = 'Item Added To Cart';
                $resp['data'] = ['cart_id' => $cartData['uid']];

            }
        } catch (\Exception $e) {
            $resp['message'] = $e->getMessage();
        }

        return $resp;
    }

    public function cart($user_id)
    {
        $resp = [
            'status' => false,
            'message' => 'Cart Not Found',
            'data' => null
        ];
        $UserCartModel = new UserCartModel();

        try {

            // Selecting the cart with the specified User
            $cart = $UserCartModel->where('user_id', $user_id)->findAll();

            // $this->prd($cart);
            // Check if the cart exists
            if ($cart) {
                // Cart exists
                $resp['status'] = true;
                $resp['message'] = 'Cart Found';
                $resp['data'] = $cart;
            }
        } catch (\Exception $e) {
            $resp['message'] = $e->getMessage();
        }


        return $resp;
    }

    private function cart_remove($cart_id)
    {
        $resp = [
            'status' => false,
            'message' => 'Failed to Remove Item',
        ];

        $UserCartModel = new UserCartModel();

        try {
            $deleted = $UserCartModel->where('uid', $cart_id)->delete();
            if ($deleted) {
                $resp['status'] = true;
                $resp['message'] = 'Item Removed Successfully';
            }
        } catch (\Exception $e) {
            $resp['message'] = $e->getMessage();
        }

        return $resp;

    }



    private function cart_empty($user_id)
    {
        $resp = [
            'status' => false,
            'message' => 'Failed to Empty Cart'
        ];

        $UserCartModel = new UserCartModel();

        try {
            $deleted = $UserCartModel->where('user_id', $user_id)->delete();
            if ($deleted) {
                $resp['status'] = true;
                $resp['message'] = 'Cart Emptyed Successfully';
            }
        } catch (\Exception $e) {
            $resp['message'] = $e->getMessage();
        }

        return $resp;

    }



    public function GET_cart()
    {
        $user_id = $this->request->getGet('user_id');

        $resp = $this->cart($user_id);
        return $this->response->setJSON($resp);
    }

    public function POST_cart_add()
    {
        $data = $this->request->getPost();

        $resp = $this->cart_add($data);
        return $this->response->setJSON($resp);

    }

    public function GET_cart_remove()
    {
        $cart_id = $this->request->getGet('cart_id');

        $resp = $this->cart_remove($cart_id);
        return $this->response->setJSON($resp);
    }


    public function GET_cart_empty()
    {
        $user_id = $this->request->getGet('user_id');

        $resp = $this->cart_empty($user_id);
        return $this->response->setJSON($resp);
    }


}