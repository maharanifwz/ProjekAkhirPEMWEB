<?php
require_once '..\vendor\autoload.php';
require_once '..\app\config\config.php';
require_once '..\app\core\Database.php';
use Kel1\ProjekAkhirPemweb\Routes;
use Kel1\ProjekAkhirPemweb\Controllers\HomeController;
use Kel1\ProjekAkhirPemweb\Controllers\UserController;
use Kel1\ProjekAkhirPemweb\Controllers\BookingController;

Routes::add('GET','/', HomeController::class,'index');
Routes::add('GET','/konsultasi', HomeController::class,'konsultasi');
Routes::add('GET','/tentangKami', HomeController::class,'tentangKami');
Routes::add('GET','/form', HomeController::class,'form');



// User
Routes::add('GET','/login', HomeController::class,'login');
Routes::add('POST','/prosesLogin', UserController::class,'login');
Routes::add('GET','/register', HomeController::class,'register');
Routes::add('POST','/prosesRegister', UserController::class,'register');

// Booking
Routes::add('GET','/klinik', BookingController::class,'index');
Routes::add('GET','/check_availability', BookingController::class,'check_availability');
Routes::add('GET','/fill_data', BookingController::class,'fill_data');


Routes::run();

// testing purpose
// if(isset($_SERVER['PATH_INFO'])){
//     echo 'ada path';
//     echo "\n";
//     echo($_SERVER['PATH_INFO']);
// }else{
//     echo 'tidak ada';
// }