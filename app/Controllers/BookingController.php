<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

session_start();

use Kel1\ProjekAkhirPemweb\Models\Booking_model;

class BookingController extends Controller
{
    private $data;
    private $booking_model;

    public function __construct()
    {
        $this->booking_model = new Booking_model();
    }

    public function __destruct()
    {
        unset($this->booking_model);
    }

    public function index()
    {
        $this->show('detailClinic');
    }

    public function check_availability()
    {
        $data['available_hour'] = $this->booking_model->getAvailableHour($_GET["date"], $_GET["jumlahHewan"]);
        $this->show('detailClinic2', $data);
    }

    public function fill_data()
    {
        foreach ($_POST as $key => $value) {
            $_SESSION[$key] = $value;
        }

        $this->data = $_POST;
        $this->show('form', $_POST);
    }

    public function upload_invoice()
    {
        foreach ($_POST as $key => $value) {
            $_SESSION[$key] = $value;
        }

        $listIdHewan = $this->booking_model->uploadDataHewan($_SESSION);

        for ($i = 0; $i < count($listIdHewan); $i++) {
            $_SESSION["idHewan" . $i] = $listIdHewan[$i];
        }
        // var_dump($_SESSION);
        $this->show('form2');
    }

    //Cek image type
    public function insertInvoice()
    {
        // Datanya di upload jadi satu
        $allowTypes = array('jpg', 'png', 'jpeg');
        $fileName = basename($_FILES["invoice"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        if (in_array($fileType, $allowTypes)) {
            if (isset($_POST['konfirm'])) {
                $file = addslashes(file_get_contents($_FILES["invoice"]["tmp_name"]));
                $this->insertHistory($file);
            }
        } else {
            $_SESSION['Invoicestate'] = "Harap memilih file gambar!";
            $this->show('form2');
            unset($_SESSION['Invoicestate']);
            return;
        };
    }

    //insertData
    public function insertHistory($fileName)
    {
        $jumlah = (int)$_SESSION["jumlahHewan"];
        $listIdHewan = "";
        for ($i = 0; $i < $jumlah; $i++) {
            $listIdHewan .= $_SESSION['idHewan' . $i] . " ";
        };
        $data = [
            'tanggal' => $_SESSION["date"],
            'jam' => $_SESSION["jam"],
            'jumlahHewan' => $_SESSION["jumlahHewan"],
            'idPengguna' => $_SESSION["idPengguna"],
            'listIdHewan' => $listIdHewan,
        ];

        $this->booking_model->insertData($fileName, $data);
        $this->show('form3');
    }
}
