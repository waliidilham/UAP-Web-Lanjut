<?php

namespace App\Controllers;

use Config\View;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function login(): string
    {
        return view('login');
    }
}
