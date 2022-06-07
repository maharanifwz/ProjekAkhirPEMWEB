<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
session_start();
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

    public function form3()
    {
        $this->show('form3');
    }

    public function riwayatKonsul()
    {
        $this->show('riwayatKonsultasi');
    }

    public function riwayatKonsul2()
    {
        $this->show('riwayatKonsultasi2');
    }

    
    public function checkAcc()
    {
        if(isset($_SESSION['loginState'])){
            if($_SESSION['loginState']){
                $this->show('konsultasi');
                return;
            }
        }
        $this->view('login');
    }

}
