<?php

namespace App\Controllers;

use Config\View;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page');
    }
    public function login(): string
    {
        return view('login');
    }
}
