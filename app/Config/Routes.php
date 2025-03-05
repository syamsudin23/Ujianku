<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'c_Auth::Login');

$routes->get('/siswa/dashboard', 'siswa\dashboard::index');

$routes->get('/siswa/kisi-kisi', 'siswa\KisiKisi::index');

$routes->get('/siswa/jadwal-ujian', 'siswa\JadwalUjian::index');

$routes->get('/siswa/riwayat-ujian', 'siswa\RiwayatUjian::index');

