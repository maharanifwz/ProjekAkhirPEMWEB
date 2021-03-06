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
        if(!empty($email)){
            $_SESSION['stateReg'] = "Email telah terdaftar!";
            header('Location: '. BASEURL . '/register');
            return;
        }elseif(!empty($uname)){
            $_SESSION['stateReg'] = "Username telah terdaftar!";
            header('Location: '. BASEURL . '/register');
            return;
        }
        
        $this->model->addUser($data);
        unset($_SESSION['stateReg']);
        unset($data);
        header('Location: '. BASEURL . '/login');
    }

    public function login()
    {
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];
        $dbData = $this->model->fetchData($data['username']);
        $uname = $dbData[0]['username'];
        $pwd = $dbData[0]['password'];
        $is_admin = $dbData[0]['is_admin'];

        $uname = $this->model->fetchUname($data['username']);
        $pwdHash = $this->model->fetchPwd($data['username']);
        
        // verify username

        if(!empty($uname)){
            if(!empty($pwd)){
                $encodePwd = password_verify($data['password'], $pwd);
                
                if(!$encodePwd){
                    $_SESSION['state'] = "Password Anda salah. Silahkan coba lagi!";
                    $this->view('login');
                    // header('Location: '. BASEURL . '/login');
                    return;
                }
            }
            if($is_admin){
                $_SESSION['loginState'] = true;
                $id_user = $this->model->fetchId($data['username']);
                $_SESSION['idPengguna'] = $id_user[0]['id_user'];
                $_SESSION['nama'] = $id_user[0]['nama'];
                $_SESSION['isAdmin'] = true;
                $_SESSION['nama'] = $id_user[0]['nama'];
                header('Location: '. BASEURL . '/admin');
                return;
            };
            //success
            $_SESSION['loginState'] = true;
            $id_user = $this->model->fetchId($data['username']);
            $_SESSION['idPengguna'] = $id_user[0]['id_user'];
            $_SESSION['nama'] = $id_user[0]['nama'];
            unset($_SESSION['state']);
            
            header('Location: '. BASEURL . '/');
            unset($data);
            return;
        };
        $_SESSION['state'] = "Username Anda salah. Silahkan coba lagi!";
        // $this->view('login');
        header('Location: '. BASEURL . '/login');
        return;
        
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: '. BASEURL . '/');
        // $this->show('index');
    }

}
