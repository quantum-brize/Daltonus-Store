<?php

namespace App\Controllers\Api;

use App\Models\ProductModel;
use App\Models\ProductItemModel;
use App\Models\ProductConfigModel;
use App\Models\ProductMetaDetalisModel;
use App\Models\CommonModel;
use App\Models\VendorModel;
use App\Models\ProductImagesModel;
use App\Models\VariationModel;
use App\Models\VariationOptionModel;

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
        $vendor_id = !empty ($vendorRow['uid']) ? $vendorRow['uid'] : '';
        $uploadedFiles = $this->request->getFiles();



        if (empty ($data['title'])) {
            $resp['message'] = 'Your Product Has No Name';
        } else if (empty ($data['details'])) {
            $resp['message'] = 'Please add Some Details About Your Product';
        } else if (empty ($data['price'])) {
            $resp['message'] = 'Set The Price Of Your Product';
        } else if (empty ($data['categoryId'])) {
            $resp['message'] = 'Set The Category Of Your Product';
        } else if (empty ($vendor_id)) {
            $resp['message'] = 'Vendor Not Found';
        } else if (empty ($uploadedFiles['images'])) {
            $resp['message'] = 'Please Add One Product Image';
        } else {


            $product_data = [
                'uid' => $this->generate_uid(UID_PRODUCT),
                'vendor_id' => $vendor_id,
                'category_id' => $data['categoryId'],
                'name' => $data['title'],
                'description' => $data['details'],
            ];
            $product_item_data = [
                'uid' => $this->generate_uid(UID_PRODUCT_ITEM),
                'product_id' => $product_data['uid'],
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
                'product_id' => $product_data['uid'],
                'meta_title' => $data['metaTitle'],
                'meta_description' => $data['metaDescription'],
                'meta_keywords' => $data['metaKeywords'],
            ];

            $ProductImagesModel = new ProductImagesModel();
            foreach ($uploadedFiles['images'] as $file) {
                $file_src = $this->single_upload($file, PATH_PRODUCT_IMG);
                $product_image_data = [
                    'uid' => $this->generate_uid(UID_PRODUCT_IMG),
                    'product_id' => $product_data['uid'],
                    'type' => 'path',
                    'src' => $file_src
                ];
                $ProductImagesModel->insert($product_image_data);
            }

            $ProductModel = new ProductModel();
            $ProductItemModel = new ProductItemModel();
            $ProductMetaDetalisModel = new ProductMetaDetalisModel();


            // Transaction Start
            $ProductModel->transStart();
            try {
                $ProductModel->insert($product_data);
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
            $resp['data'] = ['product_id' => $product_data['uid']];
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
                    product_item.sku AS product_stock,
                    product_item.discount AS base_discount,
                    product_item.product_tags AS tags,
                    product_item.publish_date AS publish_date,
                    product_item.status AS status,
                    product_item.visibility AS visibility,
                    product_item.manufacturer_brand AS manufacturer_brand,
                    product_item.manufacturer_name AS manufacturer_name,
                    product_meta_detalis.meta_title,
                    product_meta_detalis.meta_description,
                    product_meta_detalis.meta_keywords,
                    users.user_name AS vendor,
                    vendor.uid AS vendor_id
                FROM
                    product
                JOIN
                    product_item ON product.uid = product_item.product_id
                JOIN
                    product_meta_detalis ON product.uid = product_meta_detalis.product_id
                JOIN 
                    categories ON product.category_id = categories.uid
                JOIN
                    vendor ON product.vendor_id = vendor.uid
                JOIN
                    users ON vendor.user_id = users.uid;";

        $products = $CommonModel->customQuery($sql);

        if (count($products) > 0) {
            $ProductImagesModel = new ProductImagesModel();
            foreach ($products as $key => $product) {
                $products[$key]->product_img = $ProductImagesModel->where('product_id', $product->product_id)->findAll();
            }

            $resp["status"] = true;
            $resp["data"] = $products;
            $resp["message"] = 'Products Found';
        }

        return $resp;
    }

    private function variation_options()
    {
        $resp = [
            'status' => false,
            'message' => 'Product not added',
            'data' => null
        ];
        $VariationModel = new VariationModel();
        $VariationOptionModel = new VariationOptionModel();

        try {
            $variations = $VariationModel->findAll();

            foreach($variations as $key => $val){
                $variations[$key]['options'] = $VariationOptionModel->where('variation_id', $val['uid'])->findAll();
            }

            echo json_encode($variations);
            $this->prd($variations);

        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            $VariationModel->transRollback();
            throw $e;
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
    public function GET_variation_options()
    {
        $resp = $this->variation_options();
        return $this->response->setJSON($resp);

    }

}