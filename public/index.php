<?php
require_once '..\vendor\autoload.php';
use Kel1\ProjekAkhirPemweb\Routes;
use Kel1\ProjekAkhirPemweb\Controllers\HomeController;

Routes::add('GET','/', HomeController::class,'index');
// Router::add('GET','/aboutUs', HomeController::class,'aboutUs');
// Router::add();
// Router::add();
// Router::add();
// Router::add();
// Router::add();

Routes::run();