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
$routes->get('/admin', [Admin::class, 'index'], ['filter' => 'role:administrator']);
$routes->get('/petugas', [Petugas::class, 'index'], ['filter' => 'role:petugas']);
