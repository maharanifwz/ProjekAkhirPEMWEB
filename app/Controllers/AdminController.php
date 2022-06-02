<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\models\Admin_model;

class AdminController extends Controller{
    private $model;

    public function __construct()
    {
        $this->model = new Admin_model();
    }

    public function __destruct()
    {
        unset($this->model);
    }

    public function showIndex()
    {
        $this->show('admin');
    }


    public function showRiwayat()
    {
        $riwayat = $this->model->fetchAll();
        $this->show('admin', $riwayat);
    }

    public function showYetConfirm()
    {
        $riwayat = $this->model->fetchYetConfirm();
        $this->show('admin', $riwayat);
    }

    public function showConfirm()
    {
        $this->model->fetchConfirm();
        $this->show('admin', $riwayat);
    }

    public function displayImage()
    {
        $id = $_GET["id"];
        $img = $this->model->fetchImage($id);
        $this->show('admin', $img);
    }

    public function updateStatus()
    {
        $status = $_GET["status"];
        $id = $_GET["id"];
        $value = $this->model->updateStatus($status, $id);

        $status = "Status berhasil di";
        // header('Location: '. BASEURL . '/admin');
        $this->show('admin');
    }



    
    

}