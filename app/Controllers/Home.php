<?php

namespace App\Controllers;

use Config\View;

class Home extends BaseController
{
    public function index()
    {
        if (logged_in()) {
            if (in_groups('administrator')) {
                return view('admin/index');
            } else if (in_groups('petugas')) {
                return view('petugas/index');
            } else if (in_groups('pemilih')) {
                return view('pemilih/index');
            }
        } else {
            return view('landing_page');
        }
    }
}
