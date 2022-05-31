<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

use Kel1\ProjekAkhirPemweb\Models\Booking_model;

class BookingController extends Controller
{
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
        // $booking_model = new Booking_model();
        $data['available_hour'] = $this->booking_model->getAvailableHour($_GET["date"], $_GET["jumlahHewan"]);
        $this->show('detailClinic2', $data);
    }

    public function fill_data()
    {
        // $booking_model = new Booking_model();

        $this->show('form');
    }

    //Upload Image
    public function insertInvoice()
    {
        // testing purpose
        // if(isset($_POST["konfirm"])){
        //     echo $_FILES["invoice"]["name"];
        // }else{
        //     echo "kosong";
        // };

        $allowTypes = array('jpg','png','jpeg'); 
        $fileName = basename($_FILES["invoice"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){
            if (isset($_POST['konfirm'])) { 
                $file = addslashes(file_get_contents($_FILES["invoice"]["tmp_name"]));;  
                $this->booking_model->addImage($file,3);
                $this->show('form3');
            }
        }else{
            echo "<script> alert('Tolong pilih gambar')</script>";
        };
    }
}
