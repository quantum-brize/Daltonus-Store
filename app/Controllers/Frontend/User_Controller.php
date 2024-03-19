<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;

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
            $response = [
                "status" => true,
                "message" => "Data fetched",
                "user_id" => $user_id,
                "user_data" => $UsersData
            ];
        }
        echo json_encode($response); 
    }
}
