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
        $id = $_POST['idHist'];
        $data['user'] = $this->model->fetchDetail($id);
        $nama = $this->model->fetchName();
        for ($i=0; $i < count($nama) ; $i++) { 
            foreach ($nama as $name) {
                if($name['id_user'] == $data['user'][0]['idPengguna']){
                    array_push($data['user'][0], $name['id_user'], $name['nama']);
                }
            }
        }
        $this->show('detailAdmin', $data);



    }

    public function addUserName($data)
    {
        $nama = $this->model->fetchName();
        for ($i=0; $i < count($data['riwayat']) ; $i++) { 
            foreach ($nama as $name) {
                if($name['id_user'] == $data['riwayat'][$i]['idPengguna']){
                    array_push($data['riwayat'][$i], $name['id_user'], $name['nama']);
                }
            }
        }
        return $data;
    }



    public function showRiwayat()
    {
        $data['riwayat'] = $this->model->fetchAll();

        $data = $this->addUserName($data);
        $this->show('admin', $data);
        // $img = $this->model->fetchImage();
        // $i = 0;
        // print_r($data['riwayat'][$i]['2']) ;
    }

    public function showYetConfirm()
    {
        $data['riwayat'] = $this->model->fetchYetConfirm();
        $this->show('admin', $data);
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
        $status = $_POST["flexRadioDefault"];
        $id = $_POST["idHist"];
        $value = $this->model->updateStatus($status, $id);

        // $status = "Status berhasil di";
        // header('Location: '. BASEURL . '/admin');
        $this->showDetail();
    }


    
    

}