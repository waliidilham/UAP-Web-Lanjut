<?php

namespace App\Controllers;

use Config\View;

class Home extends BaseController
{
    public function index()
    {
        if (logged_in()) {
            if (in_groups('administrator')) {
                return redirect()->to(base_url('/admin'));
            } else if (in_groups('petugas')) {
                return redirect()->to(base_url('/petugas'));
            } else if (in_groups('pemilih')) {
                return redirect()->to(base_url('/pemilih'));
            }
        } else {
            return view('landing_page');
        }
    }
}
