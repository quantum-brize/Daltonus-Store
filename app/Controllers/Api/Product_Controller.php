<?php

namespace App\Controllers\Api;

use App\Models\ProductModel;
use App\Models\ProductItemModel;
use App\Models\ProductConfigModel;
use App\Models\ProductMetaDetalisModel;
use App\Models\CommonModel;
use App\Models\VendorModel;

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
        $VendorModel = new VendorModel();
        $vendorRow = $VendorModel->where('user_id', $data['user_id'])->first();
        $vendor_id = !empty($vendorRow['uid']) ? $vendorRow['uid'] : '';


        if (empty($data['title'])) {
            $resp['message'] = 'Your Product Has No Name';
        } else if (empty($data['details'])) {
            $resp['message'] = 'Please add Some Details About Your Product';
        } else if (empty($data['price'])) {
            $resp['message'] = 'Set The Price Of Your Product';
        } else if (empty($data['categoryId'])) {
            $resp['message'] = 'Set The Category Of Your Product';
        } else if (empty($vendor_id)) {
            $resp['message'] = 'Vendor Not Found';
        } else {
            $produt_data = [
                'uid' => $this->generate_uid(UID_PRODUCT),
                'vendor_id' => $vendor_id,
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
            $resp['data'] = ['product_id' => $produt_data['uid']];
        }
        return $resp;
    }

    private function products($data)
    {
        $resp = [
            'status' => false,
            'message' => 'Product not Found',
            'data' => null
        ];

        $CommonModel = new CommonModel();


        $sql = "SELECT
                    product.uid AS product_id,
                    product.name AS name,
                    product.description AS description,
                    product.created_at AS created_at,
                    categories.name AS category,
                    product_item.price AS base_price,
                    product_item.discount AS base_discount,
                    product_item.product_tags AS tags,
                    product_item.publish_date AS publish_date,
                    product_item.status AS status,
                    product_item.visibility AS visibility,
                    product_item.manufacturer_brand AS manufacturer_brand,
                    product_item.manufacturer_name AS manufacturer_name,
                    product_meta_detalis.meta_title,
                    product_meta_detalis.meta_description,
                    product_meta_detalis.meta_keywords
                FROM
                    product
                JOIN
                    product_item ON product.uid = product_item.product_id
                JOIN
                    product_meta_detalis ON product.uid = product_meta_detalis.product_id
                JOIN 
                    categories ON product.category_id = categories.uid;";

        $products = $CommonModel->customQuery($sql);

        if (count($products) > 0) {
            $resp["status"] = true;
            $resp["data"] = $products;
            $resp["message"] = 'Products Found';
        }

        return $resp;
    }







    public function GET_product()
    {
        $data = $this->request->getGet();

        $resp = $this->products($data);
        return $this->response->setJSON($resp);
    }

    public function POST_add_product()
    {

        $data = $this->request->getPost();
        $resp = $this->add_product($data);
        return $this->response->setJSON($resp);

    }
}