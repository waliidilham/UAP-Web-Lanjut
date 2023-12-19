<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CalonModel;
use App\Models\PemiluModel;
use App\Models\TpsModel;
use App\Models\UserModel;
use App\Models\UsersModel;

class Admin extends BaseController
{
    public $pemiluModel, $userModel,  $tpsModel, $calonModel;
    public function __construct()
    {
        $this->pemiluModel = new PemiluModel();
        $this->userModel = new UsersModel();
        $this->calonModel = new CalonModel();
        $this->tpsModel = new TpsModel();
    }
    public function index()
    {
        $data = [
            'pemilu' => $this->pemiluModel->getPemilu(),
            'pemilih' => $this->userModel->getPemilih(),
            'calon' => $this->calonModel->getCalon(),
            'tps' => $this->tpsModel->getTps(),
            'petugas' => $this->userModel->getPetugas(),
            'countPemilu' => $this->pemiluModel->countPemilu(),
        ];
        return view('admin/index', $data);
    }

    public function petugas()
    {
        $data = [
            'petugas' => $this->userModel->getPetugas(),
            'countPetugas' => $this->userModel->countPetugas(),
            'countDaerahAsal' => $this->userModel->countDaerahPetugas(),
            'tps' => $this->tpsModel->getTps(),
        ];
        return view('admin/petugas', $data);
    }
    public function pemilih()
    {
        $data = [
            'pemilih' => $this->userModel->getPemilih(),
            'countPemilih' => $this->userModel->countPemilih(),
            'countDaerahAsal' => $this->userModel->countDaerahPemilih(),
            'tps' => $this->tpsModel->getTps(),
        ];
        return view('admin/pemilih', $data);
    }
    public function calon()
    {
        $data = [
            'calon' => $this->calonModel->getCalon(),
            // 'countCalon' => $this->calonModel->countCalon(),
            // 'countDaerahAsal' => $this->calonModel->countDaerahCalon(),
            // 'tps' => $this->tpsModel->getTps(),
        ];
        return view('admin/calon', $data);
    }

    public function updatePetugas($id)
    {
        $path = 'assets/uploads/petugas/';
        $foto = $this->request->getFile('fotoPetugas');
        $data = [
            'username' => $this->request->getPost('usernamePetugas'),
            'email' => $this->request->getPost('emailPetugas'),
        ];
        if ($foto !== null && $foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $fotoPath = base_url($path . $name);
                $data['foto'] = $fotoPath;
            }
        }
        $this->userModel->updateActiveStatus($data, $id);
        return redirect()->to('/admin/petugas');
    }
    public function updatePemilih($id)
    {
        $path = 'assets/uploads/petugas/';
        $foto = $this->request->getFile('fotopemilih');
        $data = [
            'username' => $this->request->getPost('usernamepemilih'),
            'email' => $this->request->getPost('emailpemilih'),
        ];
        if ($foto !== null && $foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $fotoPath = base_url($path . $name);
                $data['foto'] = $fotoPath;
            }
        }
        $this->userModel->updateActiveStatus($data, $id);
        return redirect()->to('/admin/pemilih');
    }
    public function destroy($id)
    {
        $result = $this->userModel->deleteUser($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->back()->with('success', 'Berhasil menghapus data!');
    }
    public function storeCalon()
    {
        $path = 'assets/uploads/calon/';
        $foto = $this->request->getFile('fotoCalon');
        $data = [
            'nama' => $this->request->getPost('fullname'),
            'tanggal_lahir' => $this->request->getPost('tanggalLahir'),
            'visi' => $this->request->getPost('visiCalon'),
            'misi' => $this->request->getPost('misiCalon'),
        ];

        if ($foto !== null && $foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $fotoPath = base_url($path . $name);
                $data['foto'] = $fotoPath;
            }
        }
        $this->calonModel->insert($data);
        return redirect()->to('/admin/calon');
    }

    public function updateCalon($id)
    {
        $path = 'assets/uploads/calon/';
        $foto = $this->request->getFile('fotoCalon');
        $data = [
            'nama' => $this->request->getPost('fullname'),
            'tanggal_lahir' => $this->request->getPost('tanggalLahir'),
            'visi' => $this->request->getPost('visiCalon'),
            'misi' => $this->request->getPost('misiCalon'),
        ];

        if ($foto !== null && $foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $fotoPath = base_url($path . $name);
                $data['foto'] = $fotoPath;
            }
        }
        $this->calonModel->update($id, $data);
        return redirect()->to('/admin/calon');
    }
    public function destroyCalon($id)
    {
        $result = $this->calonModel->deleteCalon($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->back()->with('success', 'Berhasil menghapus data!');
    }

    public function tps()
    {
        $data = [
            'tps' => $this->tpsModel->getTps(),
        ];
        return view('admin/tps', $data);
    }
    public function storeTps()
    {
        $data = [
            'nama_tps' => $this->request->getPost('nama_tps'),
        ];
        $this->tpsModel->insert($data);
        return redirect()->to('/admin/tps');
    }
    public function updateTps($id)
    {
        $data = [
            'nama_tps' => $this->request->getPost('nama_tps'),
        ];
        $this->tpsModel->update($id, $data);
        return redirect()->to('/admin/tps');
    }
    public function destroyTps($id)
    {
        $result = $this->tpsModel->deleteTps($id);
        if (!$result) {
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->back()->with('success', 'Berhasil menghapus data!');
    }
}
