<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CommonModel;
use App\Models\UsersModel;
use App\Models\UserImageModel;
use App\Models\AddressModel;
use App\Models\MessageModel;

class User_Controller extends Api_Controller
{
    public function __construct()
    {
        // Load session library
        $this->session = \Config\Services::session();
    }
    
    private function update_user($data)
    {
        
        $resp = [
            'status' => false,
            'message' => 'Faild!',
            'data' => null
        ];

        if (empty ($data['name'])) {
            $resp['message'] = 'Please Enter Name';
        } else if (empty ($data['number'])) {
            $resp['message'] = 'Please Enter Number';
        } else if (empty ($data['email'])) {
            $resp['message'] = 'Please Enter Email';
        } else {

            $user_data = [
                'user_name' => $data['name'],
                'number' => $data['number'],
                'email' => $data['email'],
            ];
            $UserModel = new UsersModel();
            $UserModel->transStart();
            try {
                $UserModel
                        ->where('uid', $data['user_id'])
                        ->set($user_data)
                        ->update();
                $UserModel->transCommit();
            } catch (\Exception $e) {
                $UserModel->transRollback();
                throw $e;
            }

            $update_address_data = [
                'city' => $data['city'],
                'country' => $data['country'],
                'zipcode' => $data['zip'],
                'district' => $data['district'],
                'state' => $data['state'],
                'locality' => $data['locality'],
                'is_primary' => 'primary',
            ];

            $add_address_data = [
                'uid' => $this->generate_uid(UID_ADDRESS),
                'user_id' => $data['user_id'],
                'city' => $data['city'],
                'country' => $data['country'],
                'zipcode' => $data['zip'],
                'district' => $data['district'],
                'state' => $data['state'],
                'locality' => $data['locality'],
                'is_primary' => 'primary',
            ];

            $UserAddressModel = new AddressModel();
            $AddressData = $UserAddressModel
            ->where('user_id', $data['user_id'])
            ->where('is_primary', 'primary')
            ->get()
            ->getResultArray();
            $UserAddressData = !empty($AddressData[0]) ? $AddressData[0] : null;
            $UserAddressModel->transStart();
            try {
                if (!empty($UserAddressData)) {
                    $UserAddressModel
                        ->where('user_id', $data['user_id'])
                        ->where('is_primary', 'primary')
                        ->set($update_address_data)
                        ->update();
                } else {
                    $UserAddressModel->insert($add_address_data);
                }
                $UserAddressModel->transCommit();
            } catch (\Exception $e) {
                $UserAddressModel->transRollback();
                throw $e;
            }

            $uploadedFiles = $this->request->getFiles();
            // $this->prd($uploadedFiles);
            if (!empty ($uploadedFiles['images'])) {
                $UserImagesModel = new UserImageModel();
                $UsersData = $UserImagesModel
                ->where('user_id', $data['user_id'])
                ->get()
                ->getResultArray();
                $UserImageData = !empty($UsersData[0]) ? $UsersData[0] : null;
                foreach ($uploadedFiles['images'] as $file) {
                    $file_src = $this->single_upload($file, PATH_USER_IMG);
                    $UserImagesModel->transStart();
                    try {
                        if(!empty($UserImageData)){
                            $user_image_data = [
                                'img' => $file_src,
                            ];
                            $UserImagesModel
                                ->where('user_id', $data['user_id'])
                                ->set($user_image_data)
                                ->update();
                        }else{
                            $user_image_data = [
                                'uid' => $this->generate_uid(UID_USER_IMG),
                                'user_id' => $data['user_id'],
                                'img' => $file_src,
                            ];
                            $UserImagesModel->insert($user_image_data);
                        }
                        $UserImagesModel->transCommit();
                    } catch (\Exception $e) {
                        $UserImagesModel->transRollback();
                        throw $e;
                    }
                    
                }
            }
            $resp['status'] = true;
            $resp['message'] = 'Update Successful';
            $resp['data'] = ['user_id' => $data['user_id']];
        }
        return $resp;
    }

    private function change_password($data)
    {
        
        $resp = [
            'status' => false,
            'message' => 'Password Changed Faild!',
            'data' => null
        ];

        if (empty ($data['old_password'])) {
            $resp['message'] = 'Please Enter Old Password';
        } else if (empty ($data['new_password'])) {
            $resp['message'] = 'Please Enter New Password';
        } else if (empty ($data['confirm_password'])) {
            $resp['message'] = 'Please Enter Confirm Password';
        } else {

            $UserModel = new UsersModel();
            $UsersData = $UserModel
                ->where('uid', $data['user_id'])
                ->where('password', md5($data['old_password']))
                ->where('type', 'user')
                ->get()
                ->getResultArray();
            $UsersData = !empty($UsersData[0]) ? $UsersData[0] : null;
            if (!empty($UsersData)) {
                $UserModel->transStart();
                try {
                    $UserModel
                            ->where('uid', $data['user_id'])
                            ->set(['password' => md5($data['new_password'])])
                            ->update();
                    $UserModel->transCommit();
                } catch (\Exception $e) {
                    $UserModel->transRollback();
                    throw $e;
                }
                $resp['status'] = true;
                $resp['message'] = 'Password Changed Successfully';
                $resp['data'] = "";
            }else{
                $resp['message'] = 'Old password did not match!';
            }
        }
        return $resp;
    }

    private function message($data)
    {
        
        $resp = [
            'status' => false,
            'message' => 'Faild!',
            'data' => null
        ];

        if (empty ($data['name'])) {
            $resp['message'] = 'Please Enter Name';
        } else if (empty ($data['email'])) {
            $resp['message'] = 'Please Enter Email';
        } else if (empty ($data['phone'])) {
            $resp['message'] = 'Please Enter Phone No.';
        }else if (empty ($data['subject'])) {
            $resp['message'] = 'Please Enter Subject';
        }else if (empty ($data['message'])) {
            $resp['message'] = 'Please Enter Message';
        } else {
            $insert_message = [
                'uid' => $this->generate_uid(UID_MESSAGE),
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'subject' => $data['subject'],
                'message' => $data['message'],
            ];
            $MessageModel = new MessageModel();
            $MessageModel->transStart();
            try {
                $messageData = $MessageModel->insert($insert_message);
                $MessageModel->transCommit();
            } catch (\Exception $e) {
                $MessageModel->transRollback();
                throw $e;
            }

            if($messageData){
                $resp['status'] = true;
                $resp['message'] = 'Message Submit Successful';
                $resp['data'] = "";
            }
            
        }
        return $resp;
    }

    private function get_user()
    {
        $user_id = $this->is_logedin();
        // echo $user_id;
        $resp = [
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

            $AllAddressData = $UserAddressModel
            ->where('user_id', $user_id)
            ->get()
            ->getResultArray();
            $AllAddressData = !empty($AllAddressData) ? $AllAddressData : null;

            $UserImageModel = new UserImageModel();
            $ImageData = $UserImageModel
            ->where('user_id', $user_id)
            ->get()
            ->getResultArray();
            $ImageData = !empty($ImageData[0]) ? $ImageData[0] : null;
            $resp = [
                "status" => true,
                "message" => "Data fetched",
                "user_id" => $user_id,
                "user_data" => $UsersData,
                "address" => $AddressData,
                "user_img" => $ImageData,
                "all_address" => $AllAddressData,
            ];
        }
        return $resp; 
    }

    public function POST_update_user()
    {
        $data = $this->request->getPost();
        $resp = $this->update_user($data);
        return $this->response->setJSON($resp);

    }

    public function POST_change_password()
    {
        $data = $this->request->getPost();
        $resp = $this->change_password($data);
        return $this->response->setJSON($resp);

    }

    public function POST_message()
    {
        $data = $this->request->getPost();
        $resp = $this->message($data);
        return $this->response->setJSON($resp);

    }

    public function GET_get_user()
    {
        $data = $this->request->getPost();
        $resp = $this->get_user($data);
        return $this->response->setJSON($resp);

    }
}
