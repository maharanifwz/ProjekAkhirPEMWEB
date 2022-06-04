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
        $data = [];
        if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
            if ($filter == 'all') {
                // unset($data['dataHistori']);
                $data['dataHistori'] = $this->model->getAllHistory($_SESSION['idPengguna']);
                $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
                $data['filter'] = 'all';
            } else if ($filter == 'onProcess') {
                // unset($data['dataHistori']);
                $data['dataHistori'] = $this->model->getonProcessHistory($_SESSION['idPengguna']);
                $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
                $data['filter'] = 'onProcess';
            } else {
                // unset($data['dataHistori']);
                $data['dataHistori'] = $this->model->getFinishedHistory($_SESSION['idPengguna']);
                $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
                $data['filter'] = 'onProcess';
            }
        } else {
            $data['dataHistori'] = $this->model->getAllHistory($_SESSION['idPengguna']);
            $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
            $data['filter'] = 'all';
        }

        // $data['dataHistori'] = $this->model->getAllHistory($_SESSION['idPengguna']);
        // $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
        // $data['filter'] = 'all';
        // var_dump($data);
        $this->show('riwayatKonsultasi', $data);
    }

    public function FilterProcessing()
    {
        $data['dataHistori'] = $this->model->getonProcessHistory($_SESSION['idPengguna']);
        $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
        $data['filter'] = 'onProcess';

        $this->show('riwayatKonsultasi', $data);
    }

    public function ShowFinishedHistory()
    {
        // 
    }
}
