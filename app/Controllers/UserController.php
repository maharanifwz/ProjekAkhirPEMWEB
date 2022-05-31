<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;
use Kel1\ProjekAkhirPemweb\models\User_model;

class UserController extends Controller{


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
            'nama' => 'chii',
            'username' => 'ochi',
            'email' => 'ochi@gmacil.com',
            'alamat' => 'jln.Ochi',
            'password' => '123'
        ];
        $user = new User_model();
        $user->addUser($data);
        // $this->show('detailClinic2',$data);
        // print json_encode($data);
        $data1['nama'] = $user->getNama();
        // $this->show('detailClinic2',$data);
        // print json_encode($data);
        foreach($data1["nama"] as $listitem) {
            $memo = $listitem["nama"];
            echo $memo; echo "\n";
        }
    }

}