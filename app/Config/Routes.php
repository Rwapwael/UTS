<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 *
 * =====================================================
 *  KONFIGURASI ROUTES – SOAL 2
 * =====================================================
 *  Mendefinisikan jalur akses setiap halaman.
 *  Halaman /admin/* dilindungi oleh filter 'auth'.
 * =====================================================
 */

// ── Halaman Publik (Guest & Admin) ───────────────────
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/program', 'Program::index');
$routes->get('/kontak', 'Kontak::index');

// ── Autentikasi ───────────────────────────────────────
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

// ── Halaman Admin (dilindungi filter auth) ───────────
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->post('updateKontak', 'Admin::updateKontak');
});
