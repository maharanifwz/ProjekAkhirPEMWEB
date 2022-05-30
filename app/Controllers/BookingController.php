<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\Models\Booking;

class BookingController extends Controller{

    public function index()
    {
        $this->show('detailClinic');
    }

    public function check_availability()
    {
        $this->show('detailClinic2');
    }

}
