<?php

namespace App\Controllers\Admin;
use App\Controllers\Main_Controller;

class Admin_Controller extends Main_Controller
{
    public function index(): void
    {
        $this->load_page('/admin/test',PAGE_DATA_ADMIN);
    }
}
