<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

class HomeController extends Controller{

    public function index()
    {
        return $this->view('index');
    }

    public function login()
    {
        return $this->view('login');
    }

    public function register()
    {
        return $this->view('register');
    }

    public function konsultasi()
    {
        return $this->view('konsultasi');
    }

    public function aboutUs()
    {
        return $this->view('aboutUs');
    }

    public function riwayat()
    {
        return $this->view('riwayat');
    }

}