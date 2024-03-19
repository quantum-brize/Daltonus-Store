<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\AddressModel;
use App\Models\UserImageModel;

class User_Controller extends Main_Controller
{
   
    public function __construct()
    {
        // Load session library
        $this->session = \Config\Services::session();
    }

    public function get_user_data()
    {
        $user_id = $this->is_logedin();
        // echo $user_id;
        $response = [
            "status" => false,
            "message" => "Data Not Found",
            "user_data" => ""
        ];
        if(!empty($user_id)){
            $UsersModel = new UsersModel();
            $UsersData = $UsersModel
            ->where('uid', $user_id)
            ->get()
            ->getResultArray();
            $UsersData = !empty($UsersData[0]) ? $UsersData[0] : null;

            $UserAddressModel = new AddressModel();
            $AddressData = $UserAddressModel
            ->where('user_id', $user_id)
            ->get()
            ->getResultArray();
            $AddressData = !empty($AddressData[0]) ? $AddressData[0] : null;

            $UserImageModel = new UserImageModel();
            $ImageData = $UserImageModel
            ->where('user_id', $user_id)
            ->get()
            ->getResultArray();
            $ImageData = !empty($ImageData[0]) ? $ImageData[0] : null;
            $response = [
                "status" => true,
                "message" => "Data fetched",
                "user_id" => $user_id,
                "user_data" => $UsersData,
                "address" => $AddressData,
                "user_img" => $ImageData
            ];
        }
        echo json_encode($response); 
    }
}
