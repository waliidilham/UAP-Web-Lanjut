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
    public function edit_pemilih()
    {
        return view('admin/edit-pemilih');
    }
    public function edit_petugas()
    {
        return view('admin/edit-petugas');
    }
    public function tambah_petugas()
    {
        return view('admin/tambah-petugas');
    }
    public function tambah_pemilih()
    {
        return view('admin/tambah-pemilih');
    }
}
