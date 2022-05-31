<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\models\Admin_model;

class AdminControllers{
    private $model;

    public function __construct()
    {
        $model = new Admin_model();
    }

    public function __destruct()
    {
        unset($this->model);
    }

    public function showRiwayat()
    {
        $this->model->fetchAll;
    }

    public function showYetConfirm()
    {
        $this->model->fetchYetConfirm;
    }

    public function showConfirm()
    {
        $this->model->fetchConfirm;
    }

    public function displayImage()
    {
        $img = $this->model->fetchImage();

    }

    
    

}