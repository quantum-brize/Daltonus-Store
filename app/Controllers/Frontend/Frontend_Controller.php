<?php

namespace App\Controllers\Frontend;
use App\Controllers\Main_Controller;
use App\Models\UsersModel;
use App\Models\OtpModel;
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
            "message"=> "",
            "user_id"=> ""
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
            $OtpModel = new OtpModel();

            
            //$otp = $this->generate_otp();
            $otp = 1234;
            $otpData = [
                "uid" => $this->generate_uid(UID_OTP),
                "user_id" => $userData['uid'],
                "otp" =>  $otp
            ];
            $OtpModel->insert($otpData);
            
            $response['status'] = true;
            $response['message'] = 'OTP send to Your Email';
            $response['user_id'] = $userData['uid'];
        }
        echo json_encode($response);
       
    }

    public function verify_otp(){
        $response =[
            "status" => false,
            "message"=> "OTP NOT MATCHED",
            "user_id"=> ""
        ];
        $OtpModel = new OtpModel();
        $OtpModel->where('user_id', $this->request->getPost('user_id'));
        $latestOtp = $OtpModel->orderBy('created_at', 'DESC')->first();
        if($latestOtp['otp'] == $this->request->getPost('otp')){  
            $usersModel = new UsersModel();
            $usersModel->setUserActive($latestOtp['user_id'], ['status' => 'active']);
            $session = \Config\Services::session();
            
            $session->set(SES_USER_USER_ID, $latestOtp['user_id']);
            $session->set(SES_USER_TYPE, 'user');

            //$this->pr($session->get(SES_USER_TYPE));
            //$this->prd($session->get(SES_USER_USER_ID));
            $response =[
                "status" => true,
                "message"=> "OTP MATCHED",
                "user_id"=> $this->request->getPost('user_id')
            ];
        }
        echo json_encode($response);

    }

    public function signup_success(){
        echo view('frontend/signup_success');
    }

}
