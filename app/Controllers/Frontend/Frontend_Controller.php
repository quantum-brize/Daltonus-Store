<?php

namespace App\Controllers\Frontend;
use App\Controllers\Main_Controller;

class Frontend_Controller extends Main_Controller
{
    public function index(): void
    {
        $this->load_page('/frontend/home',PAGE_DATA_FRONTEND);
    }
}
