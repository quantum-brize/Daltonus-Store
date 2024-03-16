<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\OtpModel;

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
        return $user_id;
        // $data = [
        //     'uid' => $this->generate_uid(UID_CATEGORY),
        //     'name' => $category_name,
        //     'parent_id' => !empty($parent_id) ? $parent_id : ''
        // ];
        // $categoriesModel = new CategoriesModel();
        // $add = $categoriesModel->insert($data);
        // if ($add) {
        //     return $data;
        // } else {
        //     return $data;
        // }
    }
}
