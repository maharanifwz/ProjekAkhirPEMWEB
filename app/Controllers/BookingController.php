<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\Models\Booking_model;

class BookingController extends Controller{

    public function index()
    {
        $this->show('detailClinic');
    }

    public function check_availability()
    {
        $data['jam'] = $this->model('Booking')->getHour();
        $this->show('detailClinic2');
    }

}
