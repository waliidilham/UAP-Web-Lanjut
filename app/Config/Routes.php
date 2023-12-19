<?php

use App\Controllers\Admin;
use App\Controllers\Home;
use App\Controllers\Pemilih;
use App\Controllers\Petugas;
use CodeIgniter\Router\RouteCollection;
use App\Config\Auth as AuthConfig;

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
$routes->put('/admin/petugas/(:any)', [Admin::class, 'updatePetugas'], ['filter' => 'role:administrator']);
$routes->put('/admin/pemilih/(:any)', [Admin::class, 'updatePemilih'], ['filter' => 'role:administrator']);
$routes->delete('/admin/user/(:any)', [Admin::class, 'destroy'], ['filter' => 'role:administrator']);
$routes->get('/admin/calon', [Admin::class, 'calon'], ['filter' => 'role:administrator']);
$routes->post('/admin/calon', [Admin::class, 'storeCalon'], ['filter' => 'role:administrator']);
$routes->put('/admin/calon/(:any)', [Admin::class, 'updateCalon'], ['filter' => 'role:administrator']);
$routes->delete('/admin/calon/(:any)', [Admin::class, 'destroyCalon'], ['filter' => 'role:administrator']);

$routes->get('/admin/tps', [Admin::class, 'tps'], ['filter' => 'role:administrator']);
$routes->post('/admin/tps', [Admin::class, 'storeTps'], ['filter' => 'role:administrator']);
$routes->put('/admin/tps/(:any)', [Admin::class, 'updateTps'], ['filter' => 'role:administrator']);
$routes->delete('/admin/tps/(:any)', [Admin::class, 'destroyTps'], ['filter' => 'role:administrator']);


$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], static function ($routes) {
  // Load the reserved routes from Auth.php
  $config         = config(AuthConfig::class);
  $reservedRoutes = $config->reservedRoutes;

  // Login/out
  $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
  $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
  $routes->get($reservedRoutes['logout'], 'AuthController::logout');

  // Registration
  $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
  $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

  // Activation
  $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
  $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

  // Forgot/Resets
  $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
  $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
  $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
  $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});
