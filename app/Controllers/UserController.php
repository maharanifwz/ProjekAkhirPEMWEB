<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\models\User_model;
session_start();

class UserController extends Controller{

    private $model;

    public function __construct()
    {
        $this->model = new User_model();
    }

    public function __destruct()
    {
        unset($this->model);
    }

    public function register()
    {
        $data = [
            'nama' => $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'alamat' => $_POST['alamat'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
        ];

        $uname = $this->model->fetchUname($data['username']);
        $email = $this->model->fetchEmail($data['email']);
        $_SESSION['state'] = "";
        if(!empty($email)){
            $_SESSION['state'] = "Email telah terdaftar!";
            // echo "<script>alert('Email telah digunakan');</script>";
            $this->view('register');
            return;
        }elseif(!empty($uname)){
            $_SESSION['state'] = "Username telah terdaftar!";
            // echo "<script>alert('Username telah digunakan');</script>";
            $this->view('register');
            return;
        }

        $this->model->addUser($data);
        unset($data);
        $this->view('login');
    }

    public function login()
    {
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];
        
        $uname = $this->model->fetchUname($data['username']);
        $pwdHash = $this->model->fetchPwd($data['username']);
        
        //verify username
        if(!empty($uname)){
            $_SESSION['state'] = "";
            if(!empty($pwdHash)){
                $encodePwd = password_verify($data['password'], $pwdHash[0]['password']);
                if(!$encodePwd){
                    $_SESSION['state'] = "Password Anda salah. Silahkan coba lagi!";
                    $this->view('login');
                    unset($_SESSION['state']);
                    return;
                }
            }
            //success
            $_SESSION['loginState'] = true;
            unset($_SESSION['state']);
            $this->show('index');
            unset($data);
            return;
        };
        $_SESSION['state'] = "Username Anda salah. Silahkan coba lagi!";
        $this->view('login');
        unset($_SESSION['state']);
        return;
        
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        $this->show('index');
    }

}
//untuk lihat isi array
// print json_encode($data1);
// foreach($data1["nama"] as $listitem) {
        //     $memo = $listitem["nama"];
        //     echo $memo; echo "\n";
        // }