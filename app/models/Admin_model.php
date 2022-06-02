<?php

namespace Kel1\ProjekAkhirPemweb\models;

use Database;
use PDO;
use PDOException;

class Admin_model{

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function __destruct() {
        unset($this->db);
    }

    public function fetchAll()
    {
        $que = ("SELECT * FROM riwayatKonsultasi");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchYetConfirm()
    {
        $que = ("SELECT * FROM riwayatKonsultasi where status = 'Belum Terverifikasi' ");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function fetchConfirm()
    {
        $que = ("SELECT nama FROM riwayatKonsultasi where status = 'Terverifikasi'");
        $this->db->query($que);
        return $this->db->resultSet();
    }

    public function updateStatus($status, $id)
    {
        $que = ("UPDATE riwayatKonsultasi SET status = '$status' where id = '$id'");
        $this->db->query($que);
        $this->db->execute();
    }


    public function fetchImage($id)
    {
        $this->db->query("SELECT nama FROM riwayatKonsultasi where id_user = '$id' " );
        return $this->db->resultSet();
    }




}