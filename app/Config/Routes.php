<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'c_Auth::Login');

$routes->get('/dashboard', 'c_Dash::Dash');

$routes->get('/kisi-kisi', 'c_kisi_kisi::kisi_kisi');

$routes->get('/jadwal_ujian', 'c_jadwal_ujian::jadwal_ujian');

$routes->get('/riwayat_ujian', 'c_riwayat_ujian::riwayat_ujian');

