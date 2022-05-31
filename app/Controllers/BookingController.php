<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

use Kel1\ProjekAkhirPemweb\Models\Booking_model;

class BookingController extends Controller
{
    private $data;

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
    }
}
