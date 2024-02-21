<?php

namespace App\Controllers;

class Main_Controller extends BaseController
{

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
}
