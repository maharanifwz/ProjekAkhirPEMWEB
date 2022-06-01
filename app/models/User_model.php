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

    public function __destruct() {
        unset($this->db);
    }

    public function fetchUname($username)
    {
        $this->db->query("SELECT username FROM pengguna WHERE username = '$username' " );
        return $this->db->resultSet();
    }

    public function fetchEmail($email)
    {
        $this->db->query("SELECT email FROM pengguna WHERE email = '$email' " );
        return $this->db->resultSet();
    }

     public function fetchPwd($username)
    {
        $this->db->query("SELECT password FROM pengguna WHERE username = '$username' " );
        return $this->db->resultSet();
    }

    public function fetchId($username)
    {
        $this->db->query("SELECT id_user from pengguna WHERE username = '$username' " );
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

    // Testing purpose

    public function addImage($filename)
    {
        $que = ("INSERT INTO testing (nama) VALUES ('$filename')");

        $this->db->query($que);
        $this->db->execute();
    }

    public function fetchImage()
    {
        $this->db->query("SELECT * FROM testing" );
        return $this->db->resultSet();
    }


}