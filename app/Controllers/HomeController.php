<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        $this->show('index');
    }

    public function konsultasi()
    {
        $this->show('konsultasi');
    }

    public function tentangKami()
    {
        $this->show('tentangKami');
    }

    public function login()
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('register');
    }

    //untuk sementara
    public function form()
    {
        $this->view('form');
    }

    public function form2()
    {
        $this->show('form2');
    }
}
