<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemiluModel;

class Petugas extends BaseController
{
    public $pemiluModel;

    public function __construct()
    {
        $this->pemiluModel = new PemiluModel();
    }
    public function index()
    {
        $data = [
            'pemilu' => $this->pemiluModel->getPemilu(),
        ];
        return view('petugas/index', $data);
    }
    public function tambah()
    {
        return view('petugas/tambah_data');
    }
}
