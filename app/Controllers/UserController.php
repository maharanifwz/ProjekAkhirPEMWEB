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
            $this->view('register');
            return;
        }elseif(!empty($uname)){
            $_SESSION['stateReg'] = "Username telah terdaftar!";
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
            $id_user = $this->model->fetchId($data['username']);
            $_SESSION['idPengguna'] = $id_user[0]['id_user'];
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

    //testing
   
 public function testing()
    {
        $this->view('testing');
    }

    public function testingProcess()
    {
        $msg = "";
 
        // If upload button is clicked ...
        $allowTypes = array('jpg','png','jpeg','gif'); 
        $fileName = basename($_FILES["uploadfile"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){
            if (isset($_POST['upload'])) { 
                $file = addslashes(file_get_contents($_FILES["uploadfile"]["tmp_name"]));  
                $this->model->addImage($file);
                $this->testingGetGambar();
            }
        }else{
            echo "<script> alert('Tolong pilih gambar')</script>";
        };
        
    }

    public function testingGetGambar()
    {
        $img = $this->model->fetchImage();
        if(count($img)>0){
            $this->view('testing', $img);
        }else{
            echo "tidak ada";
        }
    }

}
