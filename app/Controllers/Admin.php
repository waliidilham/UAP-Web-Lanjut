<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function petugas()
    {
        return view('admin/petugas');
    }
    public function pemilih()
    {
        return view('admin/pemilih');
    }
}
