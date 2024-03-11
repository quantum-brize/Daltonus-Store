<?php

namespace App\Controllers\Api;

use App\Models\ProductModel;
use App\Models\ProductItemModel;
use App\Models\ProductConfigModel;
use App\Models\ProductMetaDetalisModel;
use App\Models\CommonModel;


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
            'data' => null
        ];

        if (empty($data['title'])) {
            $resp['message'] = 'Your Product Has No Name';
        } else if (empty($data['details'])) {
            $resp['message'] = 'Please add Some Details About Your Product';
        } else if (empty($data['price'])) {
            $resp['message'] = 'Set The Price Of Your Product';
        } else if (empty($data['categoryId'])) {
            $resp['message'] = 'Set The Category Of Your Product';
        } else {
            $produt_data = [
                'uid' => $this->generate_uid(UID_PRODUCT),
                'category_id' => $data['categoryId'],
                'name' => $data['title'],
                'description' => $data['details'],
            ];
            $product_item_data = [
                'uid' => $this->generate_uid(UID_PRODUCT_ITEM),
                'product_id' => $produt_data['uid'],
                'price' => $data['price'],
                'discount' => $data['discount'],
                'product_tags' => $data['productTags'],
                'publish_date' => $data['publishDate'],
                'status' => $data['status'],
                'visibility' => $data['visibility'],
                'manufacturer_brand' => $data['manufacturerBrand'],
                'manufacturer_name' => $data['manufacturerName']
            ];
            $product_meta_data = [
                'uid' => $this->generate_uid(UID_PRODUCT_META),
                'product_id' => $produt_data['uid'],
                'meta_title' => $data['metaTitle'],
                'meta_description' => $data['metaDescription'],
                'meta_keywords' => $data['metaKeywords'],
            ];

            $ProductModel = new ProductModel();
            $ProductItemModel = new ProductItemModel();
            $ProductMetaDetalisModel = new ProductMetaDetalisModel();


            // Transaction Start
            $ProductModel->transStart();
            try {
                $ProductModel->insert($produt_data);
                $ProductItemModel->insert($product_item_data);
                $ProductMetaDetalisModel->insert($product_meta_data);
                // Commit the transaction if all queries are successful
                $ProductModel->transCommit();
            } catch (\Exception $e) {
                // Rollback the transaction if an error occurs
                $ProductModel->transRollback();
                throw $e;
            }

            $resp['status'] = true;
            $resp['message'] = 'Product added';
            $resp['data']   = ['product_id' => $produt_data['uid']];
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