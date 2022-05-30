<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

class HomeController extends Controller{

    public function index()
    {
        $this->view('templates/header');
        $this->view('index');
        $this->view('templates/footer');
    }

    public function konsultasi()
    {
        $this->view('templates/header');
        $this->view('konsultasi');
        $this->view('templates/footer');
    }

    public function tentangKami()
    {
        $this->view('templates/header');
        $this->view('tentangKami');
        // ini pengaturannya ada sendiri gak untuk ukuran divnya. Soalnya tabrakan.
        // $this->view('templates/footer');
    }

    // Sementara ini di sini dulu
    public function klinik()
    {
        $this->view('templates/header');
        $this->view('detailClinic');
        $this->view('templates/footer');
    }


    public function login()
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('register');
    }


}