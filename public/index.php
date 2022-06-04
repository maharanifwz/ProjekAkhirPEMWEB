<?php
require_once '..\vendor\autoload.php';
require_once '..\app\config\config.php';
require_once '..\app\core\Database.php';
use Kel1\ProjekAkhirPemweb\Routes;
use Kel1\ProjekAkhirPemweb\Controllers\HomeController;
use Kel1\ProjekAkhirPemweb\Controllers\UserController;
use Kel1\ProjekAkhirPemweb\Controllers\BookingController;
use Kel1\ProjekAkhirPemweb\Controllers\RiwayatController;
use Kel1\ProjekAkhirPemweb\Controllers\AdminController;

Routes::add('GET','/', HomeController::class,'index');
Routes::add('GET','/konsultasi', HomeController::class,'konsultasi');
Routes::add('GET','/tentangKami', HomeController::class,'tentangKami');
Routes::add('GET','/form', HomeController::class,'form');
Routes::add('GET','/form2', HomeController::class,'form2');
Routes::add('GET','/form3', HomeController::class,'form3');
Routes::add('GET','/mulai', HomeController::class,'checkAcc');

Routes::add('GET','/ShowAllHistory', RiwayatController::class,'ShowAllHistory');

// User
Routes::add('GET','/login', HomeController::class,'login');
Routes::add('POST','/prosesLogin', UserController::class,'login');
Routes::add('GET','/logout', UserController::class,'logout');
Routes::add('GET','/register', HomeController::class,'register');
Routes::add('POST','/prosesRegister', UserController::class,'register');

// User - Riwayat Rekomendasi
Routes::add('GET','/ShowAllHistory', RiwayatController::class,'ShowAllHistory');
Routes::add('GET','/FilterHistory', RiwayatController::class,'ShowAllHistory');

// Booking
Routes::add('GET','/klinik', BookingController::class,'index');
Routes::add('GET','/check_availability', BookingController::class,'check_availability');
Routes::add('POST','/fill_data', BookingController::class,'fill_data');
Routes::add('POST','/upload_invoice', BookingController::class,'upload_invoice');
Routes::add('POST','/konfirmasi', BookingController::class,'insertInvoice');


//Admin
//ini nnti ganti post supaya gak bisa di bypass
Routes::add('GET','/admin', AdminController::class,'ShowAllHistory');
Routes::add('GET','/filterHistoriAdmin', AdminController::class,'ShowAllHistory');
Routes::add('POST','/detailAdmin', AdminController::class,'showDetail');
Routes::add('POST','/updateStatus', AdminController::class,'updateStatus');

Routes::add('GET','/showAdmin', AdminController::class,'showYetConfirm');
Routes::add('GET','/getImage', AdminController::class,'showRiwayat');

//Testing
Routes::add('GET','/testing', UserController::class,'testing');
Routes::add('POST','/testingprocess', UserController::class,'testingProcess');

Routes::run();