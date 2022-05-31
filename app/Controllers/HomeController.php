<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

class HomeController extends Controller{

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
        $this->view('templates/header');
        $this->view('tentangKami');
        // ini pengaturannya ada sendiri gak untuk ukuran divnya. Soalnya tabrakan.
        // $this->view('templates/footer');
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


}