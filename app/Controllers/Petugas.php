<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemiluModel;
use App\Models\TpsModel;

class Petugas extends BaseController
{
    public $pemiluModel;
    public $tpsModel;

    public function __construct()
    {
        $this->pemiluModel = new PemiluModel();
        $this->tpsModel = new TpsModel();
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
        $tps = $this->tpsModel->getTps();
        $data  = [
            'title' => 'Create User',
            'tps' => $tps,
        ];
        return view('petugas/tambah_data', $data);
    }
}
