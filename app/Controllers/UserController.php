<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\Models\User;

class UserController{

    private $username;
    private $nama;
    

    public function fetchUname()
    {
        $sql = 'SELECT username FROM pengguna WHERE username';
        // if($email)
    }

    public function register()
    {
        
    }

    public function login()
    {
        
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        $this_->view('index');
    }

}