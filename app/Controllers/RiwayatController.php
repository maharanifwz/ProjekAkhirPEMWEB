<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

use Kel1\ProjekAkhirPemweb\models\Riwayat_model;

session_start();

class RiwayatController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Riwayat_model();
    }

    public function __destruct()
    {
        unset($this->model);
    }

    public function ShowAllHistory()
    {
        $data['dataHistori'] = $this->model->getAllHistory($_SESSION['idPengguna']);
        $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
        
        $this->show('riwayatKonsultasi', $data);
    }

    public function ShowOnprocessHistory()
    {
        // 
    }

    public function ShowFinishedHistory()
    {
        // 
    }
}
