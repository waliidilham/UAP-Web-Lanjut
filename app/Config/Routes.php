<?php

use App\Controllers\Admin;
use App\Controllers\Home;
use App\Controllers\Pemilih;
use App\Controllers\Petugas;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('/pemilih', [Pemilih::class, 'index'], ['filter' => 'role:pemilih']);
$routes->post('/pemilih/store', [Pemilih::class, 'store'], ['filter' => 'role:pemilih']);
$routes->get('/pemilih/success', [Pemilih::class, 'landing'], ['filter' => 'role:pemilih']);


$routes->get('/admin', [Admin::class, 'index'], ['filter' => 'role:administrator']);
$routes->get('/petugas', [Petugas::class, 'index'], ['filter' => 'role:petugas']);
$routes->get('/tambah_data', [Petugas::class, 'tambah']);
$routes->get('/admin/petugas', [Admin::class, 'petugas'], ['filter' => 'role:administrator']);
$routes->get('/admin/pemilih', [Admin::class, 'pemilih'], ['filter' => 'role:administrator']);
$routes->get('/admin/edit-pemilih', [Admin::class, 'edit_pemilih'], ['filter' => 'role:administrator']);
$routes->get('/admin/edit-petugas', [Admin::class, 'edit_petugas'], ['filter' => 'role:administrator']);
$routes->get('/admin/tambah-pemilih', [Admin::class, 'tambah_pemilih'], ['filter' => 'role:administrator']);
$routes->get('/admin/tambah-petugas', [Admin::class, 'tambah_petugas'], ['filter' => 'role:administrator']);