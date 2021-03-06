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
        $data['filter'] = 'all';
        if (isset($_GET['filter'])) {
            $filter = $_GET['filter'];
            if ($filter == 'all') {
                // unset($data['dataHistori']);
                $data['dataHistori'] = $this->model->getAllHistory($_SESSION['idPengguna']);
                $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
            } else if ($filter == 'onProcess') {
                // unset($data['dataHistori']);
                $data['dataHistori'] = $this->model->getonProcessHistory($_SESSION['idPengguna']);
                $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
                $data['filter'] = 'onProcess';
            } else {
                // unset($data['dataHistori']);
                $data['dataHistori'] = $this->model->getFinishedHistory($_SESSION['idPengguna']);
                $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
                $data['filter'] = 'Finished';
            }
        } else {
            $data['dataHistori'] = $this->model->getAllHistory($_SESSION['idPengguna']);
            $data['dataHewan'] = $this->model->getAllHewan($data['dataHistori']);
        }

        $this->show('riwayatKonsultasi', $data);
    }

    public function ShowDetailHistory($id = null)
    {
        if(empty($id)){
            $idHist= $_GET['historyId'];
        }else{
            $idHist = $id;
        }
        
        $data['riwayat'] = $this->model->getDetailHistory($idHist);
        $idHewan = explode(" ", $data['riwayat'][0]['listHewan']);
        $data['hewan'] = $this->getPet($idHewan);

        $nama = $this->model->getUserName($data['riwayat'][0]['idPengguna']);
        $data['riwayat'][0]['nama'] = $nama[0]['nama'];

        $this->show('riwayatDetail', $data);

    }

    public function getPet($idHewan)
    {
        $dataHewan = [];
        foreach ($idHewan as $id) {
            if ($id != "") {
                $data = $this->model->getUserPet($id);
                array_push($dataHewan, $data[0]);
            }
        };
        return $dataHewan;
    }

    public function cancelBooking()
    {
        $id = $_POST["idHist"];
        $value = $this->model->cancelBooking($id);
        $this->ShowDetailHistory($id);
    }
}
