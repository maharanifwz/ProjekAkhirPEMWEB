<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\models\User_model;
// session_start();

class UserController extends Controller{

    private $model;

    public function __construct()
    {
        $this->model = new User_model();
    }

    public function __destruct()
    {
        unset($this->model);
        // session_destroy();
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

        if(!empty($email)){
            echo "<script>alert('Email telah digunakan');</script>";
            $this->view('register');
            return;
        }elseif(!empty($uname)){
            echo "<script>alert('Username telah digunakan');</script>";
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
            if(!empty($pwdHash)){
                $encodePwd = password_verify($data['password'], $pwdHash[0]['password']);
                if(!$encodePwd){
                    echo "<script>alert('Password Salah');</script>";
                    $this->view('login');
                    return;
                }
                //sementara gini
                // if($pwdHash[0]['password'] != $data['password']){
                //     echo "<script>alert('Password Salah');</script>";
                //     $this->view('login');
                //     return;
                // };
            }
            //success
            // $_SESSION['loginState'] = true;
            $this->show('index');
            unset($data);
            return;
        };
        echo "<script>alert('Username Salah');</script>";
        $this->view('login');
        return;
        
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        $this->view('index');
    }

    public function testing()
    {
        $data = [];
        $user = new User_model();
        $data['nama'] = $user->getNama();
        // $this->show('detailClinic2',$data);
        // print json_encode($data);
        foreach($data["nama"] as $listitem) {
            $memo = $listitem["nama"];
            echo $memo; echo "\n";
        }
    }

    public function testing2()
    {
        $data = [
            'nama' => $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'alamat' => $_POST['alamat'],
            'password' => $_POST['password']
        ];
        $user = new User_model();
        // $user->addUser($data);
        $data1 = $user->fetchEmail($data['email']);
        // $this->show('detailClinic2',$data);
        // 
        // foreach($data1["nama"] as $listitem) {
        //     $memo = $listitem["nama"];
        //     echo $memo; echo "\n";
        // }
        if(!empty($data1)){
            print json_encode($data1);
            // echo $data1[0]['username'];
            return;
        }
        echo 'data tidak ada';
        
    }

}
//untuk lihat isi array
// print json_encode($data1);
// foreach($data1["nama"] as $listitem) {
        //     $memo = $listitem["nama"];
        //     echo $memo; echo "\n";
        // }