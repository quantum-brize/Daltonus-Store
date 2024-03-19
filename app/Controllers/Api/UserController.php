<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CommonModel;
use App\Models\UsersModel;
use App\Models\UserImageModel;
use App\Models\AddressModel;

class UserController extends Api_Controller
{
    private function update_user($data)
    {
        
        $resp = [
            'status' => false,
            'message' => 'User not Update',
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
                    $file_src = 'public\uploads\user_images/'.$this->single_upload($file, PATH_USER_IMG);
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
            $resp['message'] = 'Product added';
            $resp['data'] = ['user_id' => $data['user_id']];
        }
        return $resp;
    }

    public function POST_update_user()
    {
        $data = $this->request->getPost();
        $resp = $this->update_user($data);
        return $this->response->setJSON($resp);

    }
}
