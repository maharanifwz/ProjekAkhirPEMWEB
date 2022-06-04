<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\models\Admin_model;
session_start();

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

    public function showDetail()
    {
        $this->show('detailAdmin');
    }


    public function showRiwayat()
    {
        $data['riwayat'] = $this->model->fetchAll();
        $nama = $this->model->fetchName();
        $user = [];

        for ($i=0; $i < count($data['riwayat']) ; $i++) { 
            foreach ($nama as $name) {
                if($name['id_user'] == $data['riwayat'][$i]['idPengguna']){
                    array_push($data['riwayat'][$i], $name['id_user'], $name['nama']);
                }
            }
            array_push($data['riwayat'][$i],$i);
        }
        
        $this->show('admin', $data);
        // $img = $this->model->fetchImage();
        // $i = 0;
        // print_r($data['riwayat'][$i]['2']) ;
    }

    public function showYetConfirm()
    {
        $riwayat = $this->model->fetchYetConfirm();
        $this->show('admin', $riwayat);
    }

    public function showConfirm()
    {
        $riwayat = $this->model->fetchConfirm();
        $this->show('admin', $riwayat);
    }

    public function displayImage()
    {
        $id = $_GET["id"];
        $data['img'] = $this->model->fetchImage($id);
        $this->show('admin', $data);
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