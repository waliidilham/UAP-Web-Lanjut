<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CalonModel;
use App\Models\PemiluModel;

class Pemilih extends BaseController
{
    public $calonModel;
    public $pemiluModel;

    public function __construct()
    {
        $this->calonModel = new CalonModel();
        $this->pemiluModel = new PemiluModel();
    }
    public function index()
    {
        $calon = $this->calonModel->getCalon();
        $data  = [
            'calon' => $calon,
            'validation' => \Config\Services::validation()
        ];
        return view('pemilih/index', $data);
    }
    public function store()
    {
        try {
            $this->pemiluModel->savePemilu([
                'id_users' => user_id(),
                'id_paslon' => $this->request->getVar('paslon'),
                'id_tps' => user()->id_tps
            ]);
            $userId = user_id();
            $userModel              = new \Myth\Auth\Models\UserModel();

            $userModel->updateActiveStatus(['active' => 0], $userId);
            return redirect()->to(base_url('/pemilih/success'));
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            log_message('error', 'Database error: ' . $e->getMessage());
            $validation = service('validation');
            $validation->setError('add_failed', 'Anda sudah memilih!');
            return redirect()->to(base_url('/pemilih'))->withInput()->with('validation', $validation);
        }
    }
    public function landing()
    {
        return view('pemilih/landing_pemilih');
    }
}
