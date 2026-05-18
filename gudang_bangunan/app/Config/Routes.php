<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Auth::login'); // Menampilkan halaman login
$routes->post('/login', 'Auth::processLogin'); // Memproses login
$routes->get('/logout', 'Auth::logout'); // Logout

$routes->get('/register', 'Auth::register'); // Menampilkan form register
$routes->post('/register', 'Auth::processRegister'); // Memproses data register

$routes->get('/barang/search', 'Barang::search'); // Menampilkan halaman search barang

$routes->get('/barang', 'Barang::tabel_barang', ['filter' => 'auth']); //Menampilkan halaman tabel barang
$routes->get('/barang/create', 'Barang::create', ['filter' => 'auth']); //Menampilkan halaman create barang
$routes->post('/barang/store', 'Barang::store', ['filter' => 'auth']); //Memproses data create barang
$routes->get('/barang/edit/(:num)', 'Barang::edit/$1', ['filter' => 'auth']); // Menampilkan halaman edit barang
$routes->post('/barang/update/(:num)', 'Barang::update/$1', ['filter' => 'auth']); // Memproses data update barang
$routes->get('/barang/delete/(:num)', 'Barang::delete/$1', ['filter' => 'auth']); // Memproses data delete barang
