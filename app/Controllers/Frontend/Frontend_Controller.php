<?php

namespace App\Controllers\Frontend;
use App\Controllers\Main_Controller;
use App\Models\UsersModel;
class Frontend_Controller extends Main_Controller
{
    public function index(): void
    {
        $this->load_page('/frontend/home',PAGE_DATA_FRONTEND);
    }



    public function load_login(){
        echo view('frontend/login');
    }
    public function load_signup(){
        echo view('frontend/signup');
    }

    public function load_otp(){
        echo view('frontend/otp');
    }


    public function handle_signup(){
        $response =[
            "status" => false,
            "message"=> ""
        ];

        $UsersModel = new UsersModel();
        $emailCondition = ['email' => $this->request->getPost('email')];
        $numberCondition = ['number' => $this->request->getPost('number')];
        
        $recordEmail  = $UsersModel->where($emailCondition)->first();
        $recordNumber = $UsersModel->where($numberCondition)->first();

        if($recordEmail){
            $response['message'] = 'Email All Ready Exists Try Diffrent';
        }else if($recordNumber){
            $response['message'] = 'Number All Ready Exists Try Diffrent';
        }else{
            $userData = [
                "uid" => $this->generate_uid(UID_USER),
                "user_name" => $this->request->getPost('user_name'),
                "email" => $this->request->getPost('email'),
                "number" => $this->request->getPost('number'),
                "password" => md5($this->request->getPost('password')),
                "status" => STATUS_PENDING,
                "type"  => TYPE_USER
            ];
            $UsersModel->insert($userData);
            $response['status'] = true;
            $response['message'] = 'OTP send to Your Email';
        }
        echo json_encode($response);
       
    }

}
