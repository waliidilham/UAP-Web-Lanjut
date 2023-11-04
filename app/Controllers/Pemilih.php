<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pemilih extends BaseController
{
    public function index()
    {
        return view('pemilih/index');
    }
}
