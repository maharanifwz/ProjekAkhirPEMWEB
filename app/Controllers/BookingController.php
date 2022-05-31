<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

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
        $booking_model = new Booking_model();
        $data['available_hour'] = $booking_model->getAvailableHour($_GET["date"], $_GET["jumlahHewan"]);
        $this->show('detailClinic2', $data);
    }

    public function fill_data()
    {
        $this->data = $_POST;
        $booking_model = new Booking_model();
        $this->show('form', $_POST);
    }

    public function upload_invoice()
    {
        array_push($this->data, $this->$_POST);
        var_dump($this->data);
        $this->show('form2');
    }

    //Upload Image
    public function insertInvoice()
    {
        // masih memikirkan id nya gimana
        echo "nunggu id nya dolo";

        // $allowTypes = array('jpg','png','jpeg'); 
        // $fileName = basename($_FILES["invoice"]["name"]); 
        // $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        // if(in_array($fileType, $allowTypes)){
        //     if (isset($_POST['konfirm'])) { 
        //         $file = addslashes(file_get_contents($_FILES["invoice"]["tmp_name"]));  
        //         $this->booking_model->addImage($file, $id);
        //         $this->show('form3');
        //     }
        // }else{
        //     echo "<script> alert('Tolong pilih gambar')</script>";
        // };
        
    }
}
