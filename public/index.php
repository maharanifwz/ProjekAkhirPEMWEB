<?php
require_once '..\vendor\autoload.php';
require_once '..\app\config\config.php';
use Kel1\ProjekAkhirPemweb\Routes;
use Kel1\ProjekAkhirPemweb\Controllers\HomeController;
use Kel1\ProjekAkhirPemweb\Controllers\UserController;
use Kel1\ProjekAkhirPemweb\Controllers\BookingController;

Routes::add('GET','/', HomeController::class,'index');
Routes::add('GET','/konsultasi', HomeController::class,'konsultasi');
Routes::add('GET','/tentangKami', HomeController::class,'tentangKami');

// Ini sementara pakai home controller
Routes::add('GET','/klinik', HomeController::class,'klinik');

// User
Routes::add('GET','/login', HomeController::class,'login');
Routes::add('GET','/register', HomeController::class,'register');
Routes::add('POST','/prosesRegister', UserController::class,'testing');


Routes::run();

// testing purpose
// if(isset($_SERVER['PATH_INFO'])){
//     echo 'ada path';
//     echo "\n";
//     echo($_SERVER['PATH_INFO']);
// }else{
//     echo 'tidak ada';
// }