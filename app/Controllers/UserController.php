<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\Models\User;

class UserController extends Controller{

    private $data = [];

    public function __construct()
    {
        $this->data = [
            'name'=> $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'alamat' => $_POST['alamat']
        ];
        
    }

    public function testing()
    {
        // echo $this->data['name'];

    }


    public function destruct()
    {
        unset($this->data);
    }


    public function fetchUname()
    {
        $sql = "SELECT username FROM pengguna WHERE username = '$this->data['username']' " ;
        $stmt = $pdo->query($sql);
        $data = $stmt->fetchAll(PD0::FETCH_ASSOC);
        echo $data['username'];
    }

    public function fetchEmail()
    {
        $sql = "SELECT email FROM pengguna WHERE email = '$this->data['email']' " ;
        $stmt = $pdo->query($sql);
        $data = $stmt->fetchAll(PD0::FETCH_ASSOC);
        echo $data;
    }

    public function register()
    {
        $uname = $this->fetchUname;
        $email = $this->fetchEmail;
        if($this->data['username'] == $uname){

            return;
        }
        if($this->data['email'] == $email){

            return;
        }

        
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