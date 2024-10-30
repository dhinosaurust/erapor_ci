<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', 'HomeController::index');
// $routes->add('/test', 'HomeController::countPegawaiByAgeRanges');

$routes->add('/list-pegawai', 'ListPegawaiController::listEmployee');
$routes->add('/list-pegawai/clearFilter', 'ListPegawaiController::clearFilter');
$routes->add('/list-pegawai/clearSearch', 'ListPegawaiController::clearSearch');

$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

$routes->group('login', function($routes){
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::attemptLogin');
});


$routes->set404Override('App\Errors::show404'); 
$routes->set404Override(static function () { return view('errors/custom/error_404'); });