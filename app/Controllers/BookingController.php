<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\Models\Booking;

class BookingController extends Controller{

    public function check_availability()
    {
        $this->view('templates/header');
        $this->view('index');
        $this->view('templates/footer');
    }

}
