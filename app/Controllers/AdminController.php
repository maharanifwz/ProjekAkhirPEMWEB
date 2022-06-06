<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

use Kel1\ProjekAkhirPemweb\models\Admin_model;

session_start();

class AdminController extends Controller
{
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

    public function addUserName($data)
    {
        for ($i = 0; $i < count($data['riwayat']); $i++) {
            foreach ($nama as $name) {
                if ($name['id_user'] == $data['riwayat'][$i]['idPengguna']) {
                    array_push($data['riwayat'][$i], $name['id_user'], $name['nama']);
                }
            }
            array_push($data['riwayat'][$i], $i);
        }
    }

    public function ShowAllHistory()
    {
        $data = [];
        $data['filter'] = 'all';
        if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
            if ($filter == 'all') {
                $data['riwayat'] = $this->model->getAllHistory($_SESSION['idPengguna']);
                $nama = $this->model->fetchName($data['riwayat']);
            } else if ($filter == 'onProcess') {
                $data['riwayat'] = $this->model->getonProcessHistory($_SESSION['idPengguna']);
                $nama = $this->model->fetchName($data['riwayat']);
                $data['filter'] = 'onProcess';
            } else {
                $data['riwayat'] = $this->model->getFinishedHistory($_SESSION['idPengguna']);
                $nama = $this->model->fetchName($data['riwayat']);
                $data['filter'] = 'Finished';
            }
        } else {
            $data['riwayat'] = $this->model->getAllHistory($_SESSION['idPengguna']);
            $nama = $this->model->fetchName($data['riwayat']);
        }

        for ($i = 0; $i < count($data['riwayat']); $i++) {
            foreach ($nama as $name) {
                if ($name['id_user'] == $data['riwayat'][$i]['idPengguna']) {
                    array_push($data['riwayat'][$i], $name['id_user'], $name['nama']);
                }
            }
            array_push($data['riwayat'][$i], $i);
        }
        $this->show('admin', $data);
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
