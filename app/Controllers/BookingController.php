<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

use Kel1\ProjekAkhirPemweb\Models\Booking_model;

class BookingController extends Controller
{

    public function index()
    {
        $this->show('detailClinic');
    }

    public function check_availability()
    {
        $booking_model = new Booking_model();

        // $data['jam'] = $this->model('Booking_model')->getHour();
        $data['available_hour'] = $booking_model->getAvailableHour($_GET["date"], $_GET["jumlahHewan"]);
        $this->show('detailClinic2', $data);
    }

    public function fill_data()
    {
        #belom mulai bikin
        $booking_model = new Booking_model();

        // $data['jam'] = $this->model('Booking_model')->getHour();
        $this->show('detailClinic');
    }
}
