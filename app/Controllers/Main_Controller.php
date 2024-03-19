<?php

namespace App\Controllers;

class Main_Controller extends BaseController
{
	public function __construct()
    {
        // Load session library
        $this->session = \Config\Services::session();
    }

    public function load_page($page, $data): void
	{
		$this->load_headers($data['data_header']);
		echo view($page, $data['data_page']);
		$this->load_footers($data['data_footer']);
	}
	private function load_headers($data): void
	{
		echo view('/' . $data['site'] . '/inc/header_link.php', $data);
		echo view('/' . $data['site'] . '/inc/header.php',  $data);
		echo view('/' . $data['site'] . '/inc/sidebar.php',  $data);
	}

	private function load_footers($data): void
	{
		echo view('/' . $data['site'] . '/inc/footer.php');
		echo view('/' . $data['site'] . '/inc/footer_link.php', $data);
	}

    public function index(): void
    {
        echo ENVIRONMENT;
    }
    public function prd($data): void
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
		die();
	}
	public function pr($data): void
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
    private function uid()
	{
		return strtoupper(bin2hex(openssl_random_pseudo_bytes(4)));
	}

	public function generate_uid($purpose)
	{
		return $purpose . $this->uid() . date('Ymd');
	}

	public function generate_otp(){
		return rand(1000, 9999);
	}

	public function is_logedin(){
		$userID = $this->session->get(SES_USER_USER_ID);
		// $this->pr($this->session->get(SES_USER_USER_ID));
		return $userID;
        // $session = \Config\Services::session();
		// session_start();
		// Retrieve session data
		// $userID = $_SESSION[SES_USER_USER_ID];
		// $username = $_SESSION['username'];
        // $session_data = $this->session->get();
		// $this->prd($session_data);
        // if(!empty($session_data)){
        //     return $session_data;
        // }else{
        //     return "False!";
        // }
    }

	


	public function single_upload($file,$path){
		if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move($path, $newName);
            return $newName;
        }
        return null;
	}


}
