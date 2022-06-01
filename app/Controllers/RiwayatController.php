<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
// use Kel1\ProjekAkhirPemweb\models\Riwayat_model;

class RiwayatController extends Controller{
    private $model;

    public function __construct()
    {
        // $model = new Riwayat_model();
    }

    public function __destruct()
    {
        unset($this->model);
    }

}