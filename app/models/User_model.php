<?php

namespace Kel1\ProjekAkhirPemweb\models;

use Database;
use PDO;
use PDOException;

class User_model{

    private $table = 'pengguna';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // public function __destruct() {
    //     unset($this->db);
    // }

    public function getNama()
    {
        $this->db->query("SELECT nama FROM pengguna WHERE nama = 'chii' " );
        return $this->db->resultSet();
    }

    public function addUser($data)
    {
        $nama = $data['nama'];
        $username = $data['username'];
        $email = $data['email'];
        $alamat = $data['alamat'];
        $pwd = $data['password'];
        $que = ("INSERT INTO pengguna  VALUES (
            NULL, '$nama','$username', '$email', '$alamat', '$pwd')");

        $this->db->query($que);
        $this->db->execute();
    }

}